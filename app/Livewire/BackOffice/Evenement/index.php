<?php

namespace App\Livewire\BackOffice\Evenement;

use Livewire\Component;
use App\Models\Evenement;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithPagination;

class Index extends Component
{

    use LivewireAlert;
    use WithPagination;

    public $event_id;
    public $searchTerm;

    protected $listeners = [
        'deletevent',
        'category-created' => 'reload',
    ];


    public function delete($id)
    {
        $this->event_id = $id;
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

    public function deletEvent(){
        $events_ = Evenement::find($this->event_id);
        $events_->delete();
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
        $this->dispatch('editevent', $id);
    }

    public function render()
    {
        
        $events = Evenement::where('title', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('description', 'like', '%'.$this->searchTerm.'%')
            ->orWhere('location', 'like', '%'.$this->searchTerm.'%')
            ->orWhereHas('author', function($query){
                $query->where('name', 'like', '%'.$this->searchTerm.'%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('livewire.back-office.evenement.index', compact('events'));
    }
}
