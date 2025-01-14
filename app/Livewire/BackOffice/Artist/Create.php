<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Category;



class Create extends Component
{
    use WithFileUploads;
   
  
    
    public function render()
    {
        $categories=Category::all();
        return view('livewire.back-office.artist.create', compact('categories'));
    }
}
