<?php

use App\Livewire\AdminDashboard;
use App\Livewire\Pos\PosIndex;
use App\Livewire\Services\ServiceIndex;
use App\Livewire\Transactions\TransactionIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', AdminDashboard::class)->name('dashboard');
Route::get('/pos', PosIndex::class)->name('pos');
Route::get('/services', ServiceIndex::class)->name('services');
Route::get('/transactions', TransactionIndex::class)->name('transactions');
