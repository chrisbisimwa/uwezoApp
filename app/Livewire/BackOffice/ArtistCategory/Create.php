<?php

namespace App\Livewire\BackOffice\ArtistCategory;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Category;

class Create extends Component
{
    use LivewireAlert;

    public $categoryName;
    public $mode;
    public $category_id;

    protected $listeners = [
        'editArtistCategory' => 'edit',
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
            Category::create([
                'name' => $this->categoryName,
            ]);
    
        }else{
            $category = Category::find($this->category_id);
            $category->name = $this->categoryName;
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

        $this->dispatch('artistCategory-created', 'Category created successfully');
        $this->resetForm();
    }

    public function edit($id)
    {
        $category = Category::find($id);
        $this->categoryName = $category->name;
        $this->category_id = $id;
        $this->mode = "edit";
    }


    public function resetForm(){
        $this->categoryName="";
        $this->mode = "create";
        $this->category_id = null;
    }

    public function mount()
    {
        $this->mode = "create";
    }


    public function render()
    {
        return view('livewire.back-office.artist-category.create');
    }
}
