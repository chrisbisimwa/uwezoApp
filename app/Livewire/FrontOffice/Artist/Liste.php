<?php

namespace App\Livewire\FrontOffice\Artist;

use Livewire\Component;
use App\Models\Category;
use App\Models\Artist;
use Illuminate\View\View;
use Livewire\WithPagination;

class Liste extends Component
{
    public $category_id;
    public $categories;
    //public $artistes=[];
    use WithPagination;

    protected $listeners = [
        'categorySelected' => 'loadByCategory',
    ];


    public function loadByCategory($id)
    {
       $this->category_id = $id;
        
      

    }

    /* public function mount()
    {
        if($this->category_id==0){
            $this->artistes = Artist::paginate(6);
        }else{
            $this->artistes = Artist::where('category_id', $this->category_id)->get();
        }

        
    } */

    public function render()
    {
        $artistes = $this->category_id ? Artist::where('category_id', $this->category_id)->paginate(12): Artist::paginate(12);
        return view('livewire.front-office.artist.liste', compact('artistes'));
    }
}
