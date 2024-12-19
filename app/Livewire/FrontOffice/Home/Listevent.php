<?php

namespace App\Livewire\FrontOffice\Home;

use Livewire\Component;
use App\Models\Evenement;
use Livewire\WithPagination;

class Listevent extends Component
{
    use WithPagination;
    
    public function render()
    {
        $events= Evenement::latest()->paginate(5);
        $count=Evenement::count();
        return view('livewire.front-office.home.listevent', compact('events','count'));
    }
}
