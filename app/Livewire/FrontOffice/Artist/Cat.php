<?php

namespace App\Livewire\FrontOffice\Artist;

use App\Models\Artist;
use Livewire\Component;
use App\Models\Category;

class Cat extends Component
{
    public $category_id;

   

    public function selectCategory($id)
    {
        $this->category_id = $id;

        $this->dispatch('categorySelected', $this->category_id);
    }



    public function render()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            $categoryCounter = Artist::where('category_id', $category->id)->count();
            $category->artistCount = $categoryCounter;
        }

        $allArtistCount = Artist::count();

        return view('livewire.front-office.artist.cat', compact('categories', 'allArtistCount'));
    }
}
