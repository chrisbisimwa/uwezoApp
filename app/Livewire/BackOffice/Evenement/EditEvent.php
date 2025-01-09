<?php

namespace App\Livewire;
namespace App\Livewire\BackOffice\Evenement;

use App\Livewire\FrontOffice\Events\Event;
use App\Models\EventCategory;
use Livewire\Component;

class EditEvent extends Component
{
    public $title;
    public $description = '';
    public $location;
    public $selectedCategories = [];
    public $categories;
    public $start_date;
    public $end_date;
    public $status = 'upcoming';
    public $image_path;
    public $imageNames = [];
   

    public function mount($events)
    {
        $this->title = $events->title;
        $this->description = $events->descriptiion;
        $this->location = $events->location;
        $this->start_date = $events->start_date;
        $this->end_date = $events->end_date;
        /* $this->image_path = $events->image_path; */
        $this->status = $events->status;
        $this->selectedCategories = $events->categories->pluck('id')->toArray();
        
    }

    public function render()
    {
        $this->categories = EventCategory::all();
        return view('livewire.back-office.evenement.editevent');
    }
}
