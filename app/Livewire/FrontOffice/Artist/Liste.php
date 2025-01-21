<?php

namespace App\Livewire\FrontOffice\Artist;

use Livewire\Component;
use App\Models\Category;
use App\Models\Artist;
use Illuminate\View\View;
use Livewire\WithPagination;

class Liste extends Component
{
    public $category_id=null;
    public $categories;
    public $artistes=[];
    use WithPagination;

    protected $listeners = [
        'categorySelected' => 'loadByCategory',
    ];


    public function loadByCategory($id)
    {
        if($id == 0){
            $this->artistes = Artist::all();

        }else{
            $this->artistes = Artist::where('category_id', $id)->get();
        }
        
      

    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->artistes = Artist::paginate(10);
    }

    public function render()
    {
        //$this->artistes = $this->category_id ? Artist::where('category_id', $this->category_id)->get(): Artist::all();
        return view('livewire.front-office.artist.liste');
    }
}
