<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\Component;

class Action extends Component
{

    public function abort(){
        $this->redirectRoute('artist.index');
    }
    public function render()
    {
        return view('livewire.back-office.artist.action');
    }
}
