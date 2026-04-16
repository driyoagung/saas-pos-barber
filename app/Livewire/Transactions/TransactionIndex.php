<?php

namespace App\Livewire\Transactions;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class TransactionIndex extends Component
{
    public function render()
    {
        return view('livewire.transactions.transaction-index');
    }
}
