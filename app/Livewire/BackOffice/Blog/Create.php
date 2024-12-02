<?php

namespace App\Livewire\BackOffice\Blog;

use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use App\Models\BlogPost;
use Illuminate\Support\Str;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;

use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $trixId;
    public $photos = [];
    public $cover_image;
    public $featured_image;
    public $categories;
    public $selectedCategories = [];
    public $content = '';
    public $tags;
    public $imageNames = [];
    public $status = 'published';

    protected $rules = [
        'title' => 'required|min:5|max:255',
        'content' => 'required',
        'status' => 'required|in:draft,published',
        'selectedCategories' => 'array',
        'featured_image' => 'nullable|image|max:1024',
    ];

    protected $messages = [
        'title.required' => 'Le titre est obligatoire.',
        'content.required' => 'Le contenu est obligatoire. Veuillez saisir le contenu de votre article.',
        'featured_image.required' => 'The featured image field is required.',
        'featured_image.image' => 'The featured image must be an image.',
        'featured_image.max' => 'The featured image may not be greater than 1MB.',
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

        Storage::disk('public_uploads')->put('/blog_photos/' . $filename, $resizedImage->encode());

        $url = url('/files/blog_photos/' . $filename);

        $this->content .= '<img style="" src="' . $url . '" alt="Uploaded Image">';
        return $this->dispatch('blogimageUploaded', $url);
    }

    public function savePost(){
        //dd($this->content);
      $validatedData = $this->validate([
        'title' => 'required',
        'content' => 'required',
        'featured_image' => 'required|image|max:1024',
    ]);

    

        $featured_image = $this->featured_image->store('blog_featured_images', 'public_uploads');

        $post = BlogPost::create([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            'featured_image' => $featured_image,
            'author_id' => Auth::user()->id,
            'status' => $this->status,
        ]);

        $post->categories()->attach($this->categories);
       // $post->tags()->attach($this->tags);

        $this->reset();

        return redirect()->route('blog.index');
        
    }

   

    public function cancel(){
        return redirect()->route('blog.index');
    }

    public function removeImage(){
        $this->featured_image = null;
    }




    public function render()
    {
        $this->categories = BlogCategory::all();
        return view('livewire.back-office.blog.create');
    }
}
