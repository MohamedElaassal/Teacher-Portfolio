<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Publication as PublicationModel;

#[Title('Publications')]
class Publication extends Component
{
    public array $publications = [];

    public function mount()
    {
        // Fetch publications from the database
        $this->publications = PublicationModel::all()->toArray();
    }

    public function amount(): int
    {
        return count($this->publications);
    }

    public function render()
    {
        return view('livewire.publication');
    }
}
