<?php

namespace App\Livewire\FrontOffice\Artist;

use Livewire\Component;
use App\Models\Category;
use App\Models\Artist;
use Illuminate\View\View;

class Liste extends Component
{
    public $category_id;
    public $categories;
    public $artistes;

    

    public function loadByCategory($id)
    {
        if($id == 0){
            $this->category_id = null;
        }else{
            $this->category_id = $id;
        }

        // Récupérer les artistes en fonction de la catégorie sélectionnée, ou tous les artistes si aucune catégorie n'est sélectionnée
        $this->artistes = $this->category_id ? Artist::where('category_id', $this->category_id)->get(): Artist::all();

    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->loadByCategory(0);
    }

    public function render()
    {
        
        return view('livewire.front-office.artist.liste');
    }
}
