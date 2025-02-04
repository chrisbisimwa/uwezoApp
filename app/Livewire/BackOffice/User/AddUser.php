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
        'photo' => 'required|image|max:1024',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
    ];

    public function save()
    {
        $this->validate();

        $photo = $this->photo->store('user_photos', 'public_uploads');


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
            'confirmButtonText' =>  'Close',
            'cancelButtonText' =>  'Cancel',
        ]);
        $this->dispatch('userAdded');
    }


    public function render()
    {
        return view('livewire.back-office.user.add-user');
    }
}
