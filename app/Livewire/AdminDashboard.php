<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Transaction;
use Carbon\Carbon;

#[Layout('components.layouts.app')]
class AdminDashboard extends Component
{
    public function render()
    {
        $todayRevenue = Transaction::whereDate('created_at', Carbon::today())->where('status', 'completed')->sum('total_amount');
        $totalTransactions = Transaction::count();
        $recentTransactions = Transaction::with('cashier')->latest()->take(5)->get();

        return view('livewire.admin-dashboard', [
            'todayRevenue' => $todayRevenue,
            'totalTransactions' => $totalTransactions,
            'recentTransactions' => $recentTransactions
        ]);
    }
}
