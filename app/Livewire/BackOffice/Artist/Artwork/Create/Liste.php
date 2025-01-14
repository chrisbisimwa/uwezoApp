<?php

namespace App\Livewire\BackOffice\Artist\Artwork\Create;

use Livewire\Component;

class Liste extends Component
{
    public $oeuvres= [];
    protected $listeners = ['addNewArtwork' => 'addNewArtwork'];

    public function addNewArtwork($artwork){
        $this->oeuvres[] = $artwork;
    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.create.liste');
    }
}
