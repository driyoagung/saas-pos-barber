<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\Item;
use App\Models\User;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first(); 
        if(!$user) {
            $user = User::create(['name' => 'Admin Cashier', 'email' => 'admin@pos.com', 'password' => bcrypt('password')]);
        }

        $itemHaircut = Item::where('name', 'Premium Haircut')->first();
        $itemPomade = Item::where('name', 'Pomade Suavecito')->first();
        
        // Trx 1
        $subtotal1 = $itemHaircut->price + $itemPomade->price;
        $trx1 = Transaction::create([
            'invoice_number' => 'TRX-0042',
            'customer_name' => 'Walk-in Customer',
            'user_id' => $user->id,
            'subtotal' => $subtotal1,
            'tax' => $subtotal1 * 0.1,
            'total_amount' => $subtotal1 + ($subtotal1 * 0.1),
            'payment_method' => 'cash',
            'status' => 'completed'
        ]);
        
        TransactionItem::create([
            'transaction_id' => $trx1->id,
            'item_id' => $itemHaircut->id,
            'barber_id' => $user->id,
            'quantity' => 1,
            'price_at_time' => $itemHaircut->price,
            'subtotal' => $itemHaircut->price
        ]);
        TransactionItem::create([
            'transaction_id' => $trx1->id,
            'item_id' => $itemPomade->id,
            'quantity' => 1,
            'price_at_time' => $itemPomade->price,
            'subtotal' => $itemPomade->price
        ]);

        // Trx 2
        $itemBasic = Item::where('name', 'Basic Haircut')->first();
        $trx2 = Transaction::create([
            'invoice_number' => 'TRX-0041',
            'customer_name' => 'Ahmad Budi',
            'user_id' => $user->id,
            'subtotal' => $itemBasic->price,
            'tax' => 0,
            'total_amount' => $itemBasic->price,
            'payment_method' => 'qris',
            'status' => 'completed'
        ]);

        TransactionItem::create([
            'transaction_id' => $trx2->id,
            'item_id' => $itemBasic->id,
            'barber_id' => $user->id,
            'quantity' => 1,
            'price_at_time' => $itemBasic->price,
            'subtotal' => $itemBasic->price
        ]);
    }
}
