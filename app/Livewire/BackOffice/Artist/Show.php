<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\Component;
use App\Models\Artist;
use App\Models\Oeuvre;
use Livewire\WithPagination;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class Show extends Component
{
    use WithPagination;
    use LivewireAlert;
    use WithFileUploads;
    protected $listeners = ['clodeAddArtworkModal' => 'reload', 'deleteArtworks'];
    public $id, $mode='show', $nom, $prenom, $email, $genre, $biography, $photo, $numeroCerticat, $phone, $datenaissance;
    public $facebook_link, $instagram_link, $twitter_link, $soundcloud_link, $youtube_link, $category_id;
    public $oeuvre_id;


    protected $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'genre' => 'required',
        'phone' => 'required',
        'category_id' => 'required',
        'datenaissance' => 'required',
    ];

    protected $messages = [
        'nom.required' => 'Le nom est obligatoire',
        'prenom.required' => 'Le prénom est obligatoire',
        'email.required' => 'L\'email est obligatoire',
        'email.email' => 'L\'email doit être valide',
        'genre.required' => 'Le genre est obligatoire',
        'phone.required' => 'Le numéro de téléphone est obligatoire',
        'category_id.required' => 'La catégorie est obligatoire',
        'datenaissance.required' => 'La date de naissance est obligatoire',
    ];


    public function mount()
    {
        $artist = Artist::where('id', $this->id)->first();
        $this->nom = $artist->nom;
        $this->prenom = $artist->prenom;
        $this->email = $artist->email;
        $this->genre = $artist->genre;
        $this->datenaissance = $artist->datenaissance;
        $this->biography = $artist->biography;
        $this->numeroCerticat = $artist->numeroCerticat;
        $this->phone = $artist->phone;
        $this->facebook_link = $artist->facebook_link;
        $this->instagram_link = $artist->instagram_link;
        $this->twitter_link = $artist->twitter_link;
        $this->soundcloud_link = $artist->soundcloud_link;
        $this->youtube_link = $artist->youtube_link;
        $this->category_id = $artist->category_id;

       
    }
  

    public function changeMode($mode)
    {
        $this->mode = $mode;
    }

    
    public function update()
    {
        $this->validate();
        $artist = Artist::where('id', $this->id)->first();

        $photo = null;
        if($this->photo){
            $this->validate([
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
           
            $photo = $this->photo->store('artist-photos', 'public_uploads');
        }


        $artist->update([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'email' => $this->email,
            'genre' => $this->genre,
            'datenaissance' => $this->datenaissance,
            'biography' => $this->biography,
            'numeroCerticat' => $this->numeroCerticat,
            'phone' => $this->phone,
            'facebook_link' => $this->facebook_link,
            'instagram_link' => $this->instagram_link,
            'twitter_link' => $this->twitter_link,
            'soundcloud_link' => $this->soundcloud_link,
            'youtube_link' => $this->youtube_link,
            'category_id' => $this->category_id,
        ]);

        if($photo){
            $artist->update([
                'photo' => $photo,
            ]);
        }
        $this->mode = 'show';
        $this->render();
        $this->alert('success', 'Artiste modifié avec succès', [
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


    public function reload()
    {
        $this->render();
    }

    public function deleteArtwork($id)
    {

        $this->oeuvre_id = $id;
        $this->confirm('Voulez-vous vraiment supprimer cette oeuvre ?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Non',
            'onConfirmed' => 'deleteArtworks',
        ]);
    }

    public function deleteArtworks(){
        $oeuvre = Oeuvre::where('id', $this->oeuvre_id)->first();
        $oeuvre->delete();
        $this->alert('success', 'Oeuvre supprimée avec succès', [
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
        

    public function render()
    {
        $artist = Artist::where('id', $this->id)->first();
        $categories = Category::all();
        return view('livewire.back-office.artist.show', compact('artist', 'categories'));
    }
}
