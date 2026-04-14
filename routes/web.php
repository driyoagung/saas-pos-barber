<?php

use App\Livewire\AdminDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', AdminDashboard::class)->name('dashboard');
