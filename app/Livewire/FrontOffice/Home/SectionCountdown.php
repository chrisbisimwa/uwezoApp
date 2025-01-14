<?php

namespace App\Livewire\FrontOffice\Home;

use App\Models\Evenement;
use Livewire\Component;
use Livewire\WithPagination;

class SectionCountdown extends Component
{
    use WithPagination;

    public function render()
    {
        $events= Evenement::whereIn('status', ['upcoming'])->latest()->paginate(1);
        return view('livewire.front-office.home.section-countdown', compact('events'));
    }
}
