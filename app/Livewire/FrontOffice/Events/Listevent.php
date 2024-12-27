<?php

namespace App\Livewire\FrontOffice\Events;

use Livewire\Component;
use App\Models\Evenement;
use Livewire\WithPagination;

class Listevent extends Component
{
    use WithPagination;
    public function render()
    {
        $events= Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])->latest()->paginate(5);
        $count=Evenement::count();
        return view('livewire.front-office.events.listevent', compact('events','count'));
    }
}
