<?php

namespace App\Livewire\BackOffice\Artist\Artwork;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $type, $description, $price, $photo, $source, $date, $status;

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

    public function addNewArtwork()
    {
        //dd($this->photo);
        $validated = $this->validate();
        if ($validated) {
            $image = null;
            if ($this->type == 'Image') {
                $image = $this->photo->store('artworks', 'public_uploads');
            }

            $this->dispatch('addNewArtwork', [
                'name' => $this->name,
                'type' => $this->type,
                'description' => $this->description,
                'price' => $this->price,
                'image' => $image,
                'source' => $this->source,
                'date' => $this->date,
                'status' => $this->status,
            ]);

            $this->dispatch('clodeArtworkModal');

            $this->reset();
        }
    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.create');
    }
}
