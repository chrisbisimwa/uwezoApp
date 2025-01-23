<?php

namespace App\Livewire;
namespace App\Livewire\BackOffice\Evenement;

use App\Models\Artist;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Evenement;
use Carbon\Carbon;
use Livewire\Component;


class EditEvent extends Component
{
    use WithFileUploads;

    // Important: Type hinting
    public $id;
    public $title;
    public $description;
    public $location;
    public $start_date;
    public $end_date;
    public $status;
    public $typeOrganisateur; // 'artiste' ou 'organisateur'
    public $organizer;
    public $organizer_phone;
    public $organizer_email;
    public $image_path;
    public $artist_id;
    public $author_id;
    public $artist_name;
    public $categories = [];
    public $selectedCategories = [];
    public $artists;

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    protected $rules = [
        'title' => 'required|min:5|max:200',
        'description' => 'required',
        'location' => 'required',
        'organizer' => 'required_if:typeOrganisateur,organisateur',
        'artist_id' => 'required_if:typeOrganisateur,artiste',
    ];

    protected $messages = [
        'title.required' => 'Le titre est obligatoire.',
        'description.required' => 'La description est obligatoire.',
        'organizer.required_if' => 'Le nom de l’organisateur est obligatoire.',
        'artist_id.required_if' => 'Un artiste doit être sélectionné.',
    ];
   


    public function mount($events)
    {
        //dd($this->id=$events->id);
        $this->id = $events->id;
        $this->title = $events->title;
        $this->description = $events->description;
        $this->location = $events->location;
        $this->start_date = $events->start_date;
        $this->end_date = $events->end_date;
        $this->image_path = $events->image_path;
        /* dd($this->end_date->format('d/m/Y H:m')); */
        //$this->updated_at= $events->updated_at;
        /* $this->status = $events->status; */
        $this->selectedCategories = $events->categories->pluck('id')->toArray();
        $this->dispatch('events-loaded', description: $events->description);

       

        // Récupérer l'événement
        //$event = Evenement::findOrFail($this->eventId);
        
        // Vérifier si c'est un artiste ou un organisateur
        //dd($events);
        if ($events->artist_id) {
            $this->typeOrganisateur = 'artiste';
            $this->artist_id = $events->artist_id;
            $this->artist_name = Artist::find($events->artist_id)?->name;
        } else {
            $this->typeOrganisateur = 'organisateur';
            $this->organizer = $events->organizer;
           
            $this->organizer_phone = $events->organizer_phone;
            $this->organizer_email = $events->organizer_email;
        }
        
    }

    public function updateEvent()
    {
        
        $this->validate();

        $events= Evenement::find($this->id);
        if($events){
            //dd($events->title = $this->title);
        $events->title = $this->title;
        $events->description = $this->description;
        $events->location = $this->location;
        $events->start_date = Carbon::parse($this->start_date->format('Y-m-d H:m'));
        $events->end_date = $this->end_date;
        $events->organizer= $this->organizer;
        $events->organizer_phone=$this->organizer_phone;
        $events->organizer_email=$this->organizer_email;
        $events->artist_id= $this->artist_id;
        $events->image_path = $this->image_path ? $this->image_path->store('event_image_path', 'public_uploads') : null;
        $events->author_id = Auth::id();
       // $this->events->categories()->sync($this->selectedCategories);
        $events->save();   
        session()->flash('success', 'Événement mis à jour avec succès.');
        return redirect()->route('evenement.index')->with('success', 'Événement mis à jour avec succès.');
        }
        else{
            session()->flash('error', 'Événement non trouvé.');
            return redirect()->back(); // Redirection en cas d'erreur
        }
        
    }

    public function cancel()
    {
        return redirect()->route('evenement.index');
    }

    

    public function uploadImage($image)
    {
        $imageData = substr($image, strpos($image, ',') + 1);

        $length = strlen($imageData);
        $lastSixCharacters = substr($imageData, $length - 20);

        $imageData = base64_decode($imageData);

        $filename = $lastSixCharacters . '.png';

        $resizedImage = Image::make($imageData)->resize(null, 400, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('public_uploads')->put('/events_image/' . $filename, $resizedImage->encode());

        $url = url('/files/events_image/' . $filename);

        $this->description .= '<img style="" src="' . $url . '" alt="Uploaded Image">';
        return $this->dispatch('eventsimageUploaded', $url);
    }

    public function removeImage(){
        $this->image_path = null;
    }


    public function render()
    {
        $this->categories = EventCategory::all();
        $this->artists= Artist::all();
        return view('livewire.back-office.evenement.editevent');
    }
}
