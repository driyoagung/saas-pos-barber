<?php

namespace App\Livewire\Pos;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Category;
use App\Models\Item;
use App\Models\Transaction;
use App\Models\TransactionItem;

#[Layout('components.layouts.app')]
class PosIndex extends Component
{
    public $search = '';
    public $categoryId = null;
    public $cart = [];
    public $customerName = '';
    
    public function selectCategory($id)
    {
        $this->categoryId = $this->categoryId === $id ? null : $id;
    }

    public function addToCart($itemId)
    {
        $item = Item::find($itemId);
        if (!$item) return;

        $index = collect($this->cart)->search(fn($c) => $c['item_id'] === $itemId);
        
        if ($index !== false) {
            $this->cart[$index]['qty']++;
        } else {
            $this->cart[] = [
                'item_id' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'qty' => 1
            ];
        }
    }

    public function removeFromCart($index)
    {
        unset($this->cart[$index]);
        $this->cart = array_values($this->cart); // Re-index array
    }

    public function checkout()
    {
        if (empty($this->cart)) return;

        $subtotal = collect($this->cart)->sum(fn($c) => $c['price'] * $c['qty']);
        $tax = $subtotal * 0.10;
        $total = $subtotal + $tax;

        $trx = Transaction::create([
            'invoice_number' => 'TRX-' . strtoupper(uniqid()),
            'customer_name' => $this->customerName ?: 'Walk-in Customer',
            'user_id' => 1, // Default Admin
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total_amount' => $total,
            'payment_method' => 'cash',
            'status' => 'completed',
        ]);

        foreach ($this->cart as $c) {
            TransactionItem::create([
                'transaction_id' => $trx->id,
                'item_id' => $c['item_id'],
                'barber_id' => 1,
                'quantity' => $c['qty'],
                'price_at_time' => $c['price'],
                'subtotal' => $c['price'] * $c['qty'],
            ]);
        }

        // Reset cart state after successful checkout
        $this->cart = [];
        $this->customerName = '';
        
        session()->flash('message', 'Transaksi berhasil disimpan!');
    }

    public function render()
    {
        $categories = Category::all();
        $query = Item::query()->where('is_active', true);
        
        if ($this->search) {
            $query->where('name', 'like', '%' . $this->search . '%');
        }
        
        if ($this->categoryId) {
            $query->where('category_id', $this->categoryId);
        }

        $items = $query->get();
        
        $subtotal = collect($this->cart)->sum(fn($c) => $c['price'] * $c['qty']);
        $tax = $subtotal * 0.10;
        $total = $subtotal + $tax;

        return view('livewire.pos.pos-index', [
            'categories' => $categories,
            'items' => $items,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total
        ]);
    }
}
