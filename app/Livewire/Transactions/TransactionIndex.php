<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use App\Models\Transaction;

#[Layout('components.layouts.app')]
class TransactionIndex extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Transaction::with(['items', 'cashier'])->latest();

        if ($this->search) {
            $query->where('invoice_number', 'like', '%' . $this->search . '%')
                  ->orWhere('customer_name', 'like', '%' . $this->search . '%');
        }

        $trxHariIni = Transaction::whereDate('created_at', today())->count();
        $trxBerhasil = Transaction::where('status', 'completed')->count();

        return view('livewire.transactions.transaction-index', [
            'transactions' => $query->paginate(10),
            'trxHariIni' => $trxHariIni,
            'trxBerhasil' => $trxBerhasil
        ]);
    }
}
