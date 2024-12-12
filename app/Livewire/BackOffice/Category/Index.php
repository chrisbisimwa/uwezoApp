<?php

namespace App\Livewire\BackOffice\Category;

use Livewire\Component;
use App\Models\BlogCategory;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{

    use LivewireAlert;
    public $category_id;

    protected $listeners = [
        'deleteCategory',
        'category-created' => 'reload',
    ];


    public function delete($id)
    {
        $this->category_id = $id;
        $this->confirm('Êtes-vous sûr de vouloir supprimer cette catégorie?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteCategory',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function reload(){
        $this->render();
    }

    public function deleteCategory(){
        $category = BlogCategory::find($this->category_id);
        $category->delete();
        $this->alert('success', 'Catégorie supprimée avec success', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
        $this->render();
    }

    public function edit($id)
    {
        $this->dispatch('editCategory', $id);
    }

    public function render()
    {
        $categories = BlogCategory::latest()
            ->paginate(10)
            ->withQueryString();
        return view('livewire.back-office.category.index', compact('categories'));
    }
}
