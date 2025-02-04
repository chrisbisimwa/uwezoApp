<?php

namespace App\Livewire\BackOffice\Artist;

use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Category;
use App\Models\Artist;
use Jantinnerezo\LivewireAlert\LivewireAlert;



class Create extends Component
{
    use WithFileUploads, LivewireAlert;

    public $oeuvres = [];
    public $nom, $prenom, $email, $genre, $biography, $photo, $abonnement, $numeroCerticat, $phone, $facebook_link, $twitter_link, $instagram_link, $spotify_link, $youtube_link, $category_id, $datenaissance; 
    protected $listeners = ['save-artist' => 'save', 'addNewArtwork' => 'addNewArtwork', 'deleteArtwork' => 'deleteArtWork'];

    protected $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'genre' => 'required',
        'photo' => 'required|image',
        'numeroCerticat' => 'required',
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
        'photo.required' => 'La photo est obligatoire',
        'photo.image' => 'La photo doit être une image',
        'numeroCerticat.required' => 'Le numéro d\'enregistrement est obligatoire',
        'phone.required' => 'Le numéro de téléphone est obligatoire',
        'category_id.required' => 'La catégorie est obligatoire',
        'datenaissance.required' => 'La date de naissance est obligatoire',
    ];

    public function addNewArtwork($artwork){
        
        $this->oeuvres[] = $artwork;
       
    }

    public function deleteArtWork($index){
        unset($this->oeuvres[$index]);
    }

    
   
  
    public function save(){
        $this->validate();

        $photo = null;
        if($this->photo){
            $photo = $this->photo->store('artist-photos', 'public_uploads');
        }

        $artist = Artist::create([
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            //générer un slug à partir du nom et prénom et un code à 4 chiffres
            'slug' => strtolower($this->nom.'_'.$this->prenom.'_'.rand(1000, 9999)),
            'email' => $this->email,
            'genre' => $this->genre,
            'biography' => $this->biography,
            'photo' => $photo,
            'abonnement' => $this->abonnement,
            'numeroCerticat' => $this->numeroCerticat,
            'phone' => $this->phone,
            'facebook_link' => $this->facebook_link,
            'twitter_link' => $this->twitter_link,
            'instagram_link' => $this->instagram_link,
            'soundcloud_link' => $this->spotify_link,
            'youtube_link' => $this->youtube_link,
            'category_id' => $this->category_id,
            'datenaissance' => $this->datenaissance,
        ]);

        if($this->oeuvres){
            
            foreach($this->oeuvres as $oeuvre){
                $artist->oeuvres()->create([
                    'type' => $oeuvre['type'],
                    'nom' => $oeuvre['name'],
                    'description' => $oeuvre['description'],
                    'prix' => $oeuvre['price'],
                    'image' => $oeuvre['image'],
                    'source' => $oeuvre['source'],
                    'date' => $oeuvre['date'],
                    'statut' => $oeuvre['status'],
                ]);
            }
            //$artist->oeuvres()->createMany($this->oeuvres);
        }

        $this->alert('success', 'Artiste ajouté avec succès');

   
        return redirect()->route('artist.index');


    }
    
    public function render()
    {
        $categories=Category::all();
        return view('livewire.back-office.artist.create', compact('categories'));
    }
}
