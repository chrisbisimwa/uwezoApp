<?php

namespace App\Livewire\BackOffice\ArtistCategory;

use App\Models\Category;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $category_id;
    public $searchTerm;

    protected $listeners = [
        'deleteArtistCategory',
        'artistCategory-created' => 'reload',
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
        $category = Category::find($this->category_id);
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
        $this->dispatch('editArtistCategory', $id);
    }

    public function render()
    {
        $categories = Category::where('name', 'like', '%'.$this->searchTerm.'%')
            ->paginate(10);
        return view('livewire.back-office.artist-category.index', compact('categories'));
    }
}
