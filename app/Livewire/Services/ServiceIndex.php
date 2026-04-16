<?php

namespace App\Livewire\Services;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class ServiceIndex extends Component
{
    public function render()
    {
        return view('livewire.services.service-index');
    }
}
