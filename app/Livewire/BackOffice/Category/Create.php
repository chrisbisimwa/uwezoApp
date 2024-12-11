<?php

namespace App\Livewire\BackOffice\Category;

use App\Models\BlogCategory;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
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


    public function save()
    {
        $this->validate();

        BlogCategory::create([
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
        return view('livewire.back-office.category.create');
    }
}
