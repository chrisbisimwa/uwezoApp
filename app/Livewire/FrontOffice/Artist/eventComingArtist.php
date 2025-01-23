<?php

namespace App\Livewire\FrontOffice\Artist;

use App\Models\Evenement;
use Livewire\Component;
use Livewire\WithPagination;

class eventComingArtist extends Component
{
    use WithPagination;
    public function render($id)
    {
        $events = Evenement::all()->where('artist_id', $id);
        //$events= Evenement::whereIn('status', ['upcoming', 'ongoing', 'completed'])->latest()->paginate(1);
        //$count=Evenement::count();
        return view('livewire.front-office.artist.eventComingArtist', compact('events'));
    }
}
