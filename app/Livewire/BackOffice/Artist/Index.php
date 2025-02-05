<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;
use App\Models\Artist;

class Index extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $searchTerm, $artist_id;

    protected $listeners = [
        'deleteArtist',
    ];

    public function goToAddArtist()
    {
        return redirect()->route('artist.create');
    }

    public function goToShowArtist($id)
    {
        return redirect()->route('artist.show', $id);
    }

    public function goToUpdateArtist($id)
    {
        return redirect()->route('artist.update', $id);
    }

    public function delete($id)
    {
        $this->artist_id = $id;
        $this->confirm('Etes-vous sûr de vouloir supprimer cet artiste?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteArtist',
        ]);
    }

    public function deleteArtist()
    {
        $artist = Artist::find($this->artist_id);
        $artist->delete();
        $this->alert('success', 'Artiste supprimé avec success', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function render()
    {

        $artists = Artist::where('nom', 'like', '%'.$this->searchTerm.'%')
                            ->orWhere('prenom', 'like', '%'.$this->searchTerm.'%')
                             ->orWhere('biography', 'like', '%'.$this->searchTerm.'%')
                                ->orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.back-office.artist.index', compact('artists'));
    }
}
