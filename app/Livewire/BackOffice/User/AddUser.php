<?php

namespace App\Livewire\BackOffice\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddUser extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $type, $photo, $name, $email, $password, $password_confirmation;

    

    protected $rules = [
        'type' => 'required',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ];

    protected $messages = [
        'type.required' => 'Le rôle de l\'utilisateur est obligatoire.',
        'name.required' => 'Le nom est obligatoire.',
        'email.required' => 'L\'email est obligatoire.',
        'email.unique' => 'Cet email est déjà utilisé.',
        'password.required' => 'Le mot de passe est obligatoire.',
        'password.min' => 'Le mot de passe doit comporter au moins 8 caractères.',
        'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
    ];

   


    public function save()
    {
        $this->validate();

        $photo = null;

        if ($this->photo) {
            $this->validate([
                'photo' => 'image|max:1024', // 1MB Max
            ]);

            $photo = $this->photo->store('user_photos', 'public_uploads');
        }

        User::create([
            'type' => $this->type,
            'profile_image' => $photo,
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);



        $this->reset();
        $this->alert('success', 'Utilisateur enregistré avec success', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
        ]);
        $this->dispatch('userAdded');
    }


    public function render()
    {
        return view('livewire.back-office.user.add-user');
    }
}
