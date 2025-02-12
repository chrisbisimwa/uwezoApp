<?php

namespace App\Livewire\BackOffice\Artist\Artwork;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Edit extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $artwork, $name, $type, $description, $price, $photo, $source, $date, $status, $photoUrl;

    protected $rules = [
        'name' => 'required',
        'type' => 'required',
        'date' => 'required',
        'status' => 'required'
    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'type.required' => 'Le champ type est obligatoire.',
        'date.required' => 'Le champ date est obligatoire.',
        'status.required' => 'Le champ status est obligatoire.',
        'photo.required' => 'Le champ photo est obligatoire.',
        'photo.image' => 'Le champ image doit être une image.',
    ];

    public function mount($artwork)
    {
        $this->artwork = $artwork;
        $this->name = $artwork->nom;
        $this->type = $artwork->type;
        $this->description = $artwork->description;
        $this->price = $artwork->price;
        $this->source = $artwork->source;
        $this->date = $artwork->date;
        $this->status = $artwork->statut;

        if ($artwork->image) {
            $this->photoUrl = asset('storage/uploads/' . $artwork->image);
        }
    }

    public function editNewArtwork()
    {
        //dd($this->photo);
        $validated = $this->validate();
        if ($validated) {
            $image = null;
            if ($this->type == 'Image') {
                if ($this->photo) {
                    if ($this->artwork->image) {
                        unlink(storage_path('app/public/uploads/' . $this->artwork->image));
                    }

                    $this->validate([
                        'photo' => 'required|image'
                    ]);

                    $image = $this->photo->store('artworks', 'public_uploads');

                    $this->artwork->update([
                        'image' => $image,
                    ]);

                } 


             
            }

            $this->artwork->update([
                'nom' => $this->name,
                'type' => $this->type,
                'description' => $this->description,
                'prix' => $this->price,
                'source' => $this->source,
                'date' => $this->date,
                'statut' => $this->status,
            ]);

            //livewire alert
            $this->alert('success', 'Oeuvre modifiée avec succès');
            

            

            $this->render();

            $this->dispatch('artworkUpdated');
        }
    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.edit');
    }
}
