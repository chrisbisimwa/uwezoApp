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
        'source' => 'required_if:type,Vidéo,Audio',

    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'type.required' => 'Le champ type est obligatoire.',
        'date.required' => 'Le champ date est obligatoire.',
        'status.required' => 'Le champ status est obligatoire.',
        'image.required_if' => 'Le champ image est obligatoire.',
        'image.image' => 'Le champ image doit être une image.',
        'source.required_if' => 'Le champ URL est obligatoire.',
    ];

    public function addNewArtwork(){
        $this->validate();
        $this->dispatch('addNewArtwork', [
            'name' => $this->name,
            'type' => $this->type,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image,
            'source' => $this->source,
            'date' => $this->date,
            'status' => $this->status,
        ]);
        $this->reset();

    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.create');
    }
}
