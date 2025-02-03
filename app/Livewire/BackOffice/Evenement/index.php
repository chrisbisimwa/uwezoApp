<?php

namespace App\Livewire\BackOffice\Evenement;

use Livewire\Component;
use App\Models\Evenement;
use Carbon\Carbon;
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
        'event-created' => 'reload',
    ];
// Fonction pour déterminer le statut
private function determineStatus($startDate, $endDate)
{
    $now = Carbon::now();
    $start = Carbon::parse($startDate);
    $end = Carbon::parse($endDate);

    if ($now->between($start, $end)) {
        return 'ongoing';
    } elseif ($now->greaterThan($end)) {
        return 'completed';
    } else {
        return 'upcoming';
    }
}


// Dans votre méthode render() ou dans un autre endroit approprié pour la mise à jour en base de données
public function updateEventStatus()
{
    $now = Carbon::now();

    $events = Evenement::all(); // Récupérer tous les événements

    foreach ($events as $event) {
        $start = Carbon::parse($event->start_date);
        $end = Carbon::parse($event->end_date);
        $newStatus = $this->determineStatus($start, $end);

        if ($event->status !== $newStatus) { // Mettre à jour uniquement si le statut a changé
            $event->status = $newStatus;
            $event->save();
        }
    }
}


    public function delete($id)
    {
        $this->event_id = $id;
        $this->confirm('Êtes-vous sûr de vouloir supprimer cette évènement?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteCategory',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function deletEvent(){
        $events_ = Evenement::find($this->event_id);
        $events_->delete();
        $this->alert('success', 'Evènement supprimé avec success', [
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

    public function reload(){
        $this->render();
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
            $this->updateEventStatus();
        return view('livewire.back-office.evenement.index', compact('events'));
    }
}
