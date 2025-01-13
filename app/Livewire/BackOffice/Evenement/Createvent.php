<?php

namespace App\Livewire\BackOffice\Evenement;

use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\Evenement;
use App\Models\EventCategory;
use App\Models\EventComment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Createvent extends Component
{
    use WithFileUploads;
    
    public $title;
    public $image_path;
    public $description='';
    public $location;
    public $categories;
    public $selectedCategories = [];
    public $start_date;
    public $end_date;
    public $imageNames = [];
    public $status = 'upcoming';

    protected $rules=[
        'title'=> 'required|min:5|max:200',
        'description' => 'required',
        'location'=> 'required',
        'status' => 'required|in:upcoming, ongoing, completed',
        'selectedCategories' => 'array',
        'image_path' => 'nullable|image|max:1024',
    ];

    protected $messages = [
        'title.required' => 'Le titre est obligatoire.',
        'description.required' => 'La description est obligatoire. Veuillez saisir la description de votre événement',
        'image_path.required' => 'The featured image field is required.',
        'image_path.image' => 'The featured image must be an image.',
        'image_path.max' => 'The featured image may not be greater than 1MB.',
    ];

    

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

    public function saveEvent(){
        $validatedData = $this->validate([
        'title' => 'required',
        'description' => 'required',
        'image_path' => 'required|image|max:1024',
        
    ]);

    

        
        $events = Evenement::create([
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'image_path' => $this->image_path->store('event_image_path', 'public_uploads'),
            'status' => $this->status,
            'author_id' => Auth::user()->id,
            'start_date' =>$this->start_date,
            'end_date' => $this->end_date,
            
        ]);

        $events->categories()->attach($this->categories);

        $this->reset();

        return redirect()->route('evenement.index');
        
    }

    public function cancel(){
        return redirect()->route('evenement.index');
    }

    public function removeImage(){
        $this->image_path = null;
    }

    public function render()
    {
        $this->categories = EventCategory::all();
        return view('livewire.back-office.evenement.createvent');
    }
}
