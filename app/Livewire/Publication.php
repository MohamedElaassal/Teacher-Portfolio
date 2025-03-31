<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Publications')]

class Publication extends Component
{
    public function render()
    {
        return view('livewire.publication');
    }
}
