<?php

namespace App\Livewire;
use Carbon\Carbon;
use App\Models\Evenement;
use App\Models\EventCategory;
use App\Models\Artist;
use Livewire\Component;
use Livewire\WithPagination;

class PeriodeEvent extends Component
{
    use WithPagination;

    public $selectedMonth;

    

    public function updatedSelectedMonth($value)
    {
        $this->selectedMonth = $value;
    }

    public function render()
    {
        $eventsPeriode = Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])
            ->when($this->selectedMonth, function ($query) {
                $query->whereMonth('start_date', $this->selectedMonth);
            })
            ->latest()
            ->paginate(10);

        $eventcats = EventCategory::orderBy('id', 'desc')->get();
        $monthYearEvent = Evenement::selectRaw('DISTINCT MONTH(start_date) as month')
            ->orderBy('month')
            ->pluck('month');
        $topartist = Artist::orderby('id', 'desc')->latest()->paginate(5);
        $count = Evenement::count();

        return view('livewire.periode-event', [
            'events' => $eventsPeriode,
            'eventcats' => $eventcats,
            'monthYearEvent' => $monthYearEvent,
            'topartist' => $topartist,
            'count' => $count,
        ]);
    }
}
