<?php

namespace App\Livewire\BackOffice\User;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class EditUser extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $type, $photo, $name, $email, $password, $password_confirmation, $user, $photo_url;

    protected $rules = [
        'type' => 'required',
        'name' => 'required|string|max:255',

    ];

    protected $messages = [
        'name.required' => 'Le champ nom est obligatoire',
        'name.string' => 'Le champ nom doit être une chaine de caractères',
        'name.max' => 'Le champ nom ne doit pas dépasser 255 caractères',
        'type.required' => 'Le champ rôle est obligatoire',
    ];

    public function mount($user)
    {
        $this->user = $user;
        $this->type = $user->role;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->photo_url = $user->profile_image;

    }

    public function updateUser()
    {
        $this->validate();
        $this->user->update([
            'role' => $this->type,
            'name' => $this->name,
            'email' => $this->email,
            'profile_image' => $this->photo ? $this->photo->store('profile-images', 'public_uploads') : $this->photo_url,
        ]);

        if ($this->password) {
            $this->validate([
                'password' => 'required|min:8|confirmed',
            ]);

            $this->user->update([
                'password' => Hash::make($this->password),
            ]);
        }


        $this->alert('success', 'Utilisateur modifié avec succès');

        $this->dispatch('closeUserEditModal', ['id' => $this->user->id]);
    }



    public function render()
    {
        return view('livewire.back-office.user.edit-user');
    }
}
