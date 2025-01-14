<?php

namespace App\Livewire\BackOffice\Artist\Artwork;

use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $name, $type, $description, $price, $image, $source, $date, $status;

    protected $rules = [
        'name' => 'required',
        'type' => 'required',
        'date' => 'required',
        'status' => 'required',
        'image' => 'required_if:type,Image|image|max:1024',
        'source' => 'required_if:type,!Image|url',
    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'type.required' => 'Le champ type est obligatoire.',
        'date.required' => 'Le champ date est obligatoire.',
        'status.required' => 'Le champ status est obligatoire.',
        'image.required_if' => 'Le champ image est obligatoire.',
        'image.image' => 'Le champ image doit être une image.',
        'image.max' => 'Le champ image ne doit pas dépasser 1Mo.',
        'source.required_unless' => 'Le champ URL est obligatoire.',
        'source.url' => 'Le champ URL doit être une URL valide.',
    ];

    public function addNewArtwork()
    {
        $validated = $this->validate();
        if ($validated) {
           /*  $image = null;
            if ($this->type == 'Image') {
                $image = $this->image->store('artworks', 'public_uploads');
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
            ]); */

            //dispatch browser event
            $this->dispatchBrowserEvent('clodeArtworkModal');
           
            $this->reset();
        }
    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.create');
    }
}
