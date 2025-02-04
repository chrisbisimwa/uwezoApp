<?php

namespace App\Livewire\BackOffice\Artist\Artwork\Create;

use Livewire\Component;
use App\Models\Oeuvre;

class Liste extends Component
{
    //déclarer une variable $oeuvres de type Oeuvre
    public $oeuvres = [];
    
    protected $listeners = ['addNewArtwork' => 'addNewArtwork'];

    public function addNewArtwork($artwork){
        $this->oeuvres[] = $artwork;
    }

    public function deleteArt($index){
        unset($this->oeuvres[$index]);

        $this->dispatch('deleteArtwork', $index);
    }

    public function render()
    {
        return view('livewire.back-office.artist.artwork.create.liste');
    }
}

