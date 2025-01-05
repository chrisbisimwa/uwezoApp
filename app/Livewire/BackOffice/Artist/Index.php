<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use App\Models\Artist;

class Index extends Component
{
    use WithPagination;
    public $searchTerm;

    public function goToAddArtist()
    {
        return redirect()->route('artist.create');
    }

    public function goToShowArtist($id)
    {
        return redirect()->route('artist.show', $id);
    }

    public function render()
    {

        $artists = Artist::where('nom', 'like', '%'.$this->searchTerm.'%')
                            ->orWhere('prenom', 'like', '%'.$this->searchTerm.'%')
                             ->orWhere('biography', 'like', '%'.$this->searchTerm.'%')
                                ->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.back-office.artist.index', compact('artists'));
    }
}
