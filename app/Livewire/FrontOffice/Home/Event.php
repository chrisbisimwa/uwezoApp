<?php

namespace App\Livewire\FrontOffice\Home;

use App\Models\Evenement;
use Livewire\Component;
use Livewire\WithPagination;

class Event extends Component
{
    use WithPagination;

    public function render()
    {
        $events= Evenement::latest()->paginate(1);
        $count=Evenement::count();
        return view('livewire.front-office.home.event', compact('events','count'));
    }
}
