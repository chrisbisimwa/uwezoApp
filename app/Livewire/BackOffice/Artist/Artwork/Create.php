<?php

namespace App\Livewire\BackOffice\Artist\Artwork;

use Livewire\Component;

class Create extends Component
{
    public $name, $type, $description, $price, $image, $source, $date, $status;

    protected $rules = [
        'name' => 'required',
        'type' => 'required',
        'date' => 'required',
        'status' => 'required',
        'image' => 'required_if:type,Image',
        'source' => 'required_if:type,Vidéo,Audio',

    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire.',
        'type.required' => 'Le champ type est obligatoire.',
        'date.required' => 'Le champ date est obligatoire.',
        'status.required' => 'Le champ status est obligatoire.',
        'image.required_if' => 'Le champ image est obligatoire.',
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

    }
    public function render()
    {
        return view('livewire.back-office.artist.artwork.create');
    }
}
