<?php

namespace App\Livewire\FrontOffice\Artist;

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
        return view('livewire.front-office.artist.cat', compact('categories'));
    }
}
