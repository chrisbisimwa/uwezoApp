<?php

namespace App\Livewire\BackOffice\EventCategory;

use Livewire\Component;
use App\Models\EventCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreateCategory extends Component
{
    use LivewireAlert;

    public $namecat;
    public $descriptioncat;
    public $mode;
    public $category_id;

    protected $listeners = [
        'editCategory' => 'edit',
    ];

    protected $rules = [
        'namecat' => 'required',
        'descriptioncat' => 'nullable|string',
    ];

    protected $messages = [
        'namecat.required' => 'Le nom de la catégorie est requise',
    ];

    public function mount(){
        $this->mode = "create";
    }


    public function savecat()
    {
        $this->validate();

        if($this->mode=="create"){
            EventCategory::create([
                'name' => $this->namecat,
                'description' => $this->descriptioncat,
            ]);
    
        }else{
            $category = EventCategory::find($this->category_id);
            $category->name = $this->namecat;
            $category->description = $this->descriptioncat;
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
        $this->namecat = $category->name;
        $this->descriptioncat = $category->description;
        $this->category_id = $id;
        $this->mode = "edit";
    }

    public function resetForm(){
        $this->namecat="";
        $this->descriptioncat="";
        $this->mode = "create";
        
    }


    public function updated($namecat)
    {
        $this->validateOnly($namecat);
    }
    public function render()
    {
        return view('livewire.back-office.event-category.create-category');
    }
}
