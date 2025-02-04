<?php

namespace App\Livewire\BackOffice\User\Profile;

use Livewire\Component;
use App\Models\NewsletterSubscription;
use App\Models\User;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    use WithPagination;
    use LivewireAlert;
    public $subscriberId;
    public $userId, $userName, $userEmail,  $userRole,$oldPassword, $userPassword, $userPassword_confirmation;


    protected $messages = [
        'oldPassword.required' => 'Le champ ancien mot de passe est obligatoire',
        'userPassword.required' => 'Le champ nouveau mot de passe est obligatoire',
        'userPassword.min' => 'Le champ nouveau mot de passe doit contenir au moins 8 caractères',
        'userPassword.confirmed' => 'Les champs nouveau mot de passe et confirmation du mot de passe ne correspondent pas',
    ];

    protected $listeners = [
        'deleteSubscription','deleteUsers', 'userAdded' => 'reload'
    ];

    public function deleteSubscriber($id)
    {
        $this->subscriberId = $id;
       
        $this->confirm('Êtes-vous sûr de vouloir supprimer cet abonné ?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteSubscription',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function deleteUser($id)
    {
        $this->userId = $id;
       
        $this->confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Annuler',
            'onConfirmed' => 'deleteUsers',
            'onCancelled' => 'cancelled'
        ]);
    }

    public function reload()
    {
        $this->render();
    }

    public function deleteUsers()
    {
        $user = User::find($this->userId);
        $user->delete();
        $this->alert('success', 'Utilisateur supprimé avec succès', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Fermer',
            'cancelButtonText' => 'Annuler',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }

    public function deleteSubscription()
    {
        $subscriber = NewsletterSubscription::find($this->subscriberId);
        $subscriber->delete();
        $this->alert('success', 'Abonné supprimé avec succès', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
            'text' => '',
            'confirmButtonText' => 'Fermer',
            'cancelButtonText' => 'Annuler',
            'showCancelButton' => false,
            'showConfirmButton' => false,
        ]);
    }

    public function changePassword()
    {

      
        $this->validate([
            'oldPassword' => 'required',
            'userPassword' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::user()->id);
        if (password_verify($this->oldPassword, $user->password)) {
            $user->password = bcrypt($this->userPassword);
            $user->save();
            $this->alert('success', 'Mot de passe modifié avec succès', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
                'confirmButtonText' => 'Fermer',
                'cancelButtonText' => 'Annuler',
                'showCancelButton' => false,
                'showConfirmButton' => false,
            ]);
        } else {
            $this->alert('error', 'Ancien mot de passe incorrect', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
                'text' => '',
                'confirmButtonText' => 'Fermer',
                'cancelButtonText' => 'Annuler',
                'showCancelButton' => false,
                'showConfirmButton' => false,
            ]);
        }
    }

    public function mount(){
        $user= User::find(Auth::user()->id);
        $this->userName= $user->name;
        $this->userEmail= $user->email;
        $this->userRole= $user->role;
    }

    public function render()
    {
        $subscribers= NewsletterSubscription::orderBy('subscribed_at', 'desc')->paginate(10);
        $users= User::orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.back-office.user.profile.show', compact('subscribers', 'users'));
    }
}
