<?php

namespace App\Livewire\FrontOffice\Home;

use Livewire\Component;
use App\Models\Artist;

class Section5 extends Component
{
    public function render()
    {
        $artists = Artist::inRandomOrder()->limit(6)->get();
        return view('livewire.front-office.home.section5', compact('artists'));
    }
}
