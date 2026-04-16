<?php

namespace App\Livewire\Pos;

use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('components.layouts.app')]
class PosIndex extends Component
{
    public function render()
    {
        return view('livewire.pos.pos-index');
    }
}
