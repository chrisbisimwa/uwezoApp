<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\Component;
use App\Models\Artist;

class Show extends Component
{
    public $id;

    public function mount()
    {
        
    }

    public function render()
    {
        $artist = Artist::where('id', $this->id)->first();
        return view('livewire.back-office.artist.show', compact('artist'));
    }
}
