<?php

namespace App\Livewire\FrontOffice\Artist;

use Livewire\Component;
use App\Models\Category;
use App\Models\Artist;
use Illuminate\View\View;

class Liste extends Component
{
    public $category_id=null;
    public $categories;
    public $artistes=[];

    protected $listeners = [
        'categorySelected' => 'loadByCategory',
    ];

  

    

    public function loadByCategory($id)
    {
        if($id == 0){
            $this->category_id = null;

        }else{
            $this->category_id = $id;
            $this->artistes = Artist::where('category_id', $this->category_id)->get();
        }
        
      

    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->artistes = Artist::all();
    }

    public function render()
    {
        //$this->artistes = $this->category_id ? Artist::where('category_id', $this->category_id)->get(): Artist::all();
        return view('livewire.front-office.artist.liste');
    }
}
