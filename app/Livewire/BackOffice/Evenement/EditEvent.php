<?php

namespace App\Livewire;
namespace App\Livewire\BackOffice\Evenement;

use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\EventCategory;
use App\Models\Evenement;
use Livewire\Component;


class EditEvent extends Component
{
    use WithFileUploads;

    public Evenement $events; // Important: Type hinting
    public $title;
    public $id;
    public $image_path;
    public $description;
    public $location;
    public $categories;
    public $selectedCategories = [];
    public $start_date;
    public $end_date;
    public $updated_at;
    public $newImage; // Pour la nouvelle image téléchargée lors de la modification
    public $imageNames = [];
    //public $status;


    protected $rules = [
        'title' => 'required|min:5|max:200',
        'description' => 'required',
        'location' => 'required',
        //'status' => 'required|in:upcoming,ongoing,completed',
        'selectedCategories' => 'array',
        'newImage' => 'nullable|image|max:1024', // Validation pour la nouvelle image
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
    ];

    protected $messages = [
        'title.required' => 'Le titre est obligatoire.',
        'description.required' => 'La description est obligatoire.',
        'newImage.image' => 'Le fichier doit être une image.',
        'newImage.max' => 'L\'image ne doit pas dépasser 1 Mo.',
        'start_date.date' => 'La date de début doit être une date valide',
        'end_date.date' => 'La date de fin doit être une date valide',
        'end_date.after_or_equal' => 'La date de fin doit être postérieure ou égale à la date de début',
    ];
   

    public function mount($events)
    {
        $this->title = $events->title;
        $this->description = $events->description;
        $this->location = $events->location;
        $this->start_date = $events->start_date;
        $this->end_date = $events->end_date;
        $this->image_path = $events->image_path;
        //$this->updated_at= $events->updated_at;
        /* $this->status = $events->status; */
        $this->selectedCategories = $events->categories->pluck('id')->toArray();
        $this->dispatch('events-loaded', description: $events->description);
        
    }

    public function updateEvent()
    {
        
        $this->validate();

        if ($this->newImage) {
            // Supprimer l'ancienne image si elle existe
           if($this->events->image_path){
                Storage::disk('public_uploads')->delete($this->events->image_path);
           }
            $this->events->image_path = $this->newImage->store('event_image_path', 'public_uploads');
        }
        $events= Evenement::find($this->id);
        $events->title = $this->title;
        $events->description = $this->description;
        $events->location = $this->location;
        $events->start_date = $this->start_date;
        $events->end_date = $this->end_date;
        $events->updated_at= $this->updated_at;
        $events->image_path = $this->image_path->store('event_image_path', 'public_uploads');
       // $this->events->categories()->sync($this->selectedCategories);
        $events->save();   

        return redirect()->route('evenement.index')->with('success', 'Événement mis à jour avec succès.');
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
        return view('livewire.back-office.evenement.editevent');
    }
}
