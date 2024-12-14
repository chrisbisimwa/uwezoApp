<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\EventCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateventCat extends Component
{
    use LivewireAlert;

    public $name;
    public $description;

    protected $rules = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Le nom de la catégorie est requise',
    ];


    public function savecat()
    {
        $this->validate();

        EventCategory::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);



        $this->resetForm();

        $this->alert('success', 'Catégorie créée avec success', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);

        $this->dispatch('category-created', 'Category created successfully');
    }

    public function resetForm(){
        $this->name="";
        $this->description="";
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.back-office.eventcategory.createventcat');
    }
}
