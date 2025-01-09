<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\WithFileUploads;

use Livewire\Component;



class Create extends Component
{
    use WithFileUploads;

    
    public function render()
    {
        return view('livewire.back-office.artist.create');
    }
}
