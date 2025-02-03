<?php

namespace App\Livewire\BackOffice\Evenement;

use App\Models\Artist;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Evenement;
use App\Models\EventCategory;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Createvent extends Component
{
    use WithFileUploads;

    public $title;
    public $image_path;
    public $description = '';
    public $location;
    public $categories;
    public $selectedCategories = [];
    public $start_date;
    public $end_date;
    public $status = 'upcoming';
    public $typeOrganisateur;
    public $organizer;
    public $organizer_phone;
    public $organizer_email;
    public $artist_id;
    public $artists = []; // Initialisé comme vide

    protected $rules = [
        'title' => 'required|min:5|max:200',
        'description' => 'required',
        'location' => 'required',
        'status' => 'required|in:upcoming,ongoing,completed',
        'organizer' => 'required_if:typeOrganisateur,organisateur',
        'artist_id' => 'required_if:typeOrganisateur,artiste',
        'image_path' => 'nullable|image|max:1024',
    ];

    protected $messages = [
        'title.required' => 'Le titre est obligatoire.',
        'description.required' => 'La description est obligatoire. Veuillez la renseigner.',
        'organizer.required_if' => 'Vous devez définir un organisateur si le type est organisateur.',
        'artist_id.required_if' => 'Vous devez sélectionner un artiste si le type est artiste.',
    ];

    public function mount()
    {
        $this->typeOrganisateur = ''; // Initialiser le type
    }

    public function updatedTypeOrganisateur($value)
    {
        if ($value === 'artiste') {
            $this->artists = Artist::all(); // Charger les artistes si "artiste" est sélectionné
        } else {
            $this->artists = []; // Réinitialiser si autre type
        }
    }

    public function uploadImage($image)
    {
        $imageData = substr($image, strpos($image, ',') + 1);
        $imageData = base64_decode($imageData);
        $filename = Str::random(10) . '.png';

        $resizedImage = Image::make($imageData)->resize(null, 400, function ($constraint) {
            $constraint->aspectRatio();
        });

        Storage::disk('public_uploads')->put('/events_image/' . $filename, $resizedImage->encode());
        $url = url('/files/events_image/' . $filename);

        $this->description .= '<img src="' . $url . '" alt="Uploaded Image">';
    }

    public function saveEvent()
    {
        $validatedData = $this->validate();

        // Vérifier et mettre à jour le statut avant l'enregistrement
        $this->status = $this->determineStatus($this->start_date, $this->end_date);


        $event = Evenement::create([
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'image_path' => $this->image_path ? $this->image_path->store('event_image_path', 'public_uploads') : null,
            'status' => $this->status, // Utiliser le statut déterminé
            'organizer' => $this->typeOrganisateur === 'organisateur' ? $this->organizer : null,
            'organizer_phone' => $this->typeOrganisateur === 'organisateur' ? $this->organizer_phone : null,
            'organizer_email' => $this->typeOrganisateur === 'organisateur' ? $this->organizer_email : null,
            'artist_id' => $this->typeOrganisateur === 'artiste' ? $this->artist_id : null,
            'author_id' => Auth::id(),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $event->categories()->attach($this->selectedCategories);

        $this->reset();

        return redirect()->route('evenement.index');
    }

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

    public function cancel()
    {
        return redirect()->route('evenement.index');
        $this->updateEventStatus();
    }

    public function removeImage()
    {
        $this->image_path = null;
        $this->updateEventStatus();
    }

    public function render()
    {
        $this->categories = EventCategory::all();
        $this->updateEventStatus();
        return view('livewire.back-office.evenement.createvent');
    }
}
