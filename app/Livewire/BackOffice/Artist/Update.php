<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\Component;
use App\Models\Artist;

class Update extends Component
{
    public $id;

    public function mount()
    {
        
    }

    public function render()
    {
        $artistUpdate = Artist::where('id', $this->id)->first();
        return view('livewire.back-office.artist.update', compact('artistUpdate'));
    }
}
