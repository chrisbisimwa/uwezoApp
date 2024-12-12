<?php

namespace App\Livewire\BackOffice\Category;

use App\Models\BlogCategory;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Create extends Component
{
    use LivewireAlert;

    public $categoryName;
    public $categoryDescription;
    public $mode;
    public $category_id;

    protected $listeners = [
        'editCategory' => 'edit',
    ];

    protected $rules = [
        'categoryName' => 'required',
    ];

    protected $messages = [
        'categoryName.required' => 'Le nom de la catégorie est requise',
    ];


    public function save()
    {
        $this->validate();

        if($this->mode=="create"){
            BlogCategory::create([
                'name' => $this->categoryName,
                'description' => $this->categoryDescription,
            ]);
    
        }else{
            $category = BlogCategory::find($this->category_id);
            $category->name = $this->categoryName;
            $category->description = $this->categoryDescription;
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
        $category = BlogCategory::find($id);
        $this->categoryName = $category->name;
        $this->categoryDescription = $category->description;
        $this->category_id = $id;
        $this->mode = "edit";
    }


    public function resetForm(){
        $this->categoryName="";
        $this->categoryDescription="";
    }

    public function mount()
    {
        $this->mode = "create";
    }





    public function render()
    {
        return view('livewire.back-office.category.create');
    }
}
