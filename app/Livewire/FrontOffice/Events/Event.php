<?php

namespace App\Livewire\FrontOffice\Events;

use App\Models\Artist;
use App\Models\Evenement;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Event extends Component
{
    use WithPagination;
    public function render()
    {
        $events= Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])->latest()->paginate(1);
        $count=Evenement::count();
        $artists= Artist::orderBy('id','desc')->latest();
        return view('livewire.front-office.events.event', compact('events','count','artists'));
    }
}
