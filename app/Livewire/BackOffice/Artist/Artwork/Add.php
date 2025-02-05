<?php

namespace App\Livewire\BackOffice\Artist\Artwork;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Oeuvre;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Add extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $name, $type, $description, $price, $photo, $source, $date, $status, $artist;

    protected $rules = [
        'name' => 'required',
        'type' => 'required',
        'date' => 'required',
        'status' => 'required',
        'photo' => 'required|image'
    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'type.required' => 'Le champ type est obligatoire.',
        'date.required' => 'Le champ date est obligatoire.',
        'status.required' => 'Le champ status est obligatoire.',
        'photo.required' => 'Le champ photo est obligatoire.',
        'photo.image' => 'Le champ image doit être une image.',
    ];

    public function mount($artist)
    {
        $this->artist = $artist;
    }

    public function saveNewArtwork()
    {
        //dd($this->photo);
        $validated = $this->validate();
        if ($validated) {
            $image = null;
            if ($this->type == 'Image') {
                $image = $this->photo->store('artworks', 'public_uploads');
            }

            $this->artist->oeuvres()->create([
                'nom' => $this->name,
                'type' => $this->type,
                'description' => $this->description,
                'prix' => $this->price,
                'image' => $image,
                'source' => $this->source,
                'date' => $this->date,
                'statut' => $this->status,
            ]);

           
           

            $this->dispatch('clodeAddArtworkModal');

            $this->reset();
        }
    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.add');
    }
}
