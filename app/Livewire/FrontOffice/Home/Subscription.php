<?php

namespace App\Livewire\FrontOffice\Home;

use Livewire\Component;
use App\Models\NewsletterSubscription;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Subscription extends Component
{
    use LivewireAlert;
    public $email;


    protected $rules = [
        'email' => 'required|email',
    ];

    protected $messages = [
        'email.required' => 'Le champ email est obligatoire.',
        'email.email' => 'Le champ email doit être une adresse email valide.',
    ];


    public function subscribe()
    {
        $this->validate();
        //check if the email is already subscribed
        $email = NewsletterSubscription::where('email', $this->email)->first();
        if ($email) {
            $this->alert('error', 'Vous êtes déjà abonné à notre newsletter.', [
                'position' =>  'top-end',
                'timer' =>  3000,
                'toast' =>  true,
                'text' =>  '',
                'confirmButtonText' =>  'Fermer',
                'cancelButtonText' =>  'Annuler',
                'showCancelButton' =>  false,
                'showConfirmButton' =>  false,
            ]);
            return;
        } else {

            NewsletterSubscription::create([
                'email' => $this->email,
                'is_subscribed' => true,
                'subscribed_at' => now(),

            ]);
            $this->alert('success', 'Vous êtes abonné à notre newsletter.', [
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



        $this->reset();
    }
    public function render()
    {
        return view('livewire.front-office.home.subscription');
    }
}
