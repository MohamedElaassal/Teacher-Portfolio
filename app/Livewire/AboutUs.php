<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('About Me')]

class AboutUs extends Component
{
    public function render()
    {
        return view('livewire.about-us');
    }

    public function redirectToContact()
    {
        return $this->redirect('/contact',navigate:true);
    }
}
