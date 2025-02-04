<?php

namespace App\Livewire\BackOffice\EventCategory;

use Livewire\Component;
use App\Models\EventCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateCategory extends Component
{
    use LivewireAlert;

    public $name;
    public $description;
    public $mode;
    public $category_id;

    protected $listeners = [
        'editCategory' => 'edit',
    ];

    protected $rules = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Le nom de la catégorie est requise',
    ];


    public function savecat()
    {
        $this->validate();

        if($this->mode=="create"){
            EventCategory::create([
                'name' => $this->name,
                'description' => $this->description,
            ]);
    
        }else{
            $category = EventCategory::find($this->category_id);
            $category->name = $this->name;
            $category->description = $this->description;
            $category->save();

        }


        $this->alert('success', 'Catégorie enregistrée avec success', [
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
        $this->resetForm();
    }

    public function edit($id)
    {
        $category = EventCategory::find($id);
        $this->name = $category->name;
        $this->description = $category->description;
        $this->category_id = $id;
        $this->mode = "edit";
    }

    public function resetForm(){
        $this->name="";
        $this->description="";
    }


    public function updated($name)
    {
        $this->validateOnly($name);
    }
    public function render()
    {
        return view('livewire.back-office.event-category.create-category');
    }
}
