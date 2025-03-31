<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Courses')]

class Cours extends Component
{
    public function render()
    {
        return view('livewire.cours');
    }
}
