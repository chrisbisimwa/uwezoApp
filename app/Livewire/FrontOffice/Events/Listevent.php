<?php

namespace App\Livewire\FrontOffice\Events;

use App\Models\Artist;
use Livewire\Component;
use App\Models\Evenement;
use App\Models\EventCategory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Listevent extends Component
{
    use WithPagination;
   
    public function render()
    {
        $events= Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])->latest()->paginate(10);
        $eventcats= EventCategory::orderBy('id','desc')->get();
        $mouthYearEvent= Evenement::selectRaw('DISTINCT MONTH(start_date) as month')->orderBy('month')->pluck('month');
        $topartist= Artist::orderby('id','desc')->latest()->paginate(5);
        $count=Evenement::count();
        return view('livewire.front-office.events.listevent', compact('events','count','eventcats','topartist','mouthYearEvent'));
    }
}
