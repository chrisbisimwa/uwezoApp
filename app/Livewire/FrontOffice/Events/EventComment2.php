<?php

namespace App\Livewire\FrontOffice\Events;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class EventComment2 extends Component
{
    use LivewireAlert;

    public $eventDetails;
    public $events;
    public $eventcomment;

    protected $rules = [
        'eventcomment' => 'required'
    ];

    protected $messages = [
        'eventcomment.required' => 'Le commentaire est obligatoire.'
    ];

    public function mount($eventDetails)
    {
        $this->eventDetails = $eventDetails;
    }

    public function eventcommenter()
    {
        $this->validate([
            'eventcomment' => 'required'
        ]);

        $this->eventDetails->eventcomments()->create([
            'content' => $this->eventcomment,
            'user_id' => Auth::user()->id
        ]);

        $this->eventcomment = '';

       
        $this->alert('success', 'Votre commentaire a été ajouté pour validation', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function render()
    {
        $eventcomments = $this->eventDetails->eventcomments()->get();
        return view('livewire.front-office.events.event-comment2',  compact('eventcomments'));
    }
}
