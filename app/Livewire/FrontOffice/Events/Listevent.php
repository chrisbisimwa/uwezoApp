<?php

namespace App\Livewire\FrontOffice\Events;

use Livewire\Component;
use App\Models\Evenement;
use App\Models\EventCategory;
use Carbon\Carbon;
use Livewire\WithPagination;

class Listevent extends Component
{
    use WithPagination;
   
    public function render()
    {
        $events= Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])->latest()->paginate(5);
        $eventcats= EventCategory::orderBy('id','desc')->get();
        $mouthevent= Evenement::orderBy('id','desc')->get();
       
        $count=Evenement::count();
        return view('livewire.front-office.events.listevent', compact('events','count','eventcats','mouthevent'));
    }
}
