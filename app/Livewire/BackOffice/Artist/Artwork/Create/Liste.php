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

    public function delete($artwork){
        dd($artwork);
        $index = array_search($artwork, $this->oeuvres);
        unset($this->oeuvres[$index]);

        $this->dispatch('deleteArtwork', $artwork);
    }

    public function render()
    {
        return view('livewire.back-office.artist.artwork.create.liste');
    }
}


