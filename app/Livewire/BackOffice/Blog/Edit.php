<?php

namespace App\Livewire\BackOffice\Blog;

use Livewire\Component;
use App\Models\BlogCategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\BlogPost;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class Edit extends Component
{
    use WithFileUploads;

    public $categories;
    public $selectedCategories = [];
    public $content = '';
    public $tags;
    public $imageNames = [];
    public $status = 'published';
    public $title;
    public $trixId, $id;
    public $photos = [];
    public $cover_image;
    public $featured_image, $featured_image_url, $tempUrl;

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

    public function mount($post)
    {
        $this->id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->status = $post->status;
        $this->selectedCategories = $post->categories->pluck('id')->toArray();
        //load featured image file from storage
        if ($post->featured_image){
            $this->featured_image_url = Storage::url('uploads/' . $post->featured_image);
        }
            
        

        $this->dispatch('post-loaded', content: $post->content);
    }

   /*  public function updated($propertyName)
    {
        if ($propertyName == 'featured_image') {
            $this->validateOnly($propertyName);

            $this->tempUrl = $this->featured_image->temporaryUrl();

           
        }
    } */

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

    public function savePost()
    {
        if ($this->featured_image) {
            $this->validate([
                'featured_image' => 'image|max:1024',
            ]);
        }

        $validatedData = $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($this->featured_image) {
            $featured_image = $this->featured_image->store('blog_featured_images', 'public_uploads');

        } else {
            $string = $this->featured_image_url;
            
            $featured_image = substr($string, 17);
        }

        $post = BlogPost::find($this->id);
        $post->update([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            'featured_image' => $featured_image,
            'author_id' => Auth::user()->id,
            'status' => $this->status,
        ]);

        $post->categories()->detach();
        $post->categories()->attach($this->selectedCategories);
        $this->reset();

        return redirect()->route('blog.index');
    }

    public function cancel()
    {
        return redirect()->route('blog.index');
    }

    public function removeImage()
    {
        $string = $this->featured_image_url;
        $featured_image = substr($string, 17);
        Storage::disk('public_uploads')->delete($featured_image);
        $post = BlogPost::find($this->id);
        $post->update([
            'featured_image' => null,
        ]);
        $this->featured_image = null;
        $this->featured_image_url = null;
    }

    public function render()
    {
        $this->categories = BlogCategory::all();
        return view('livewire.back-office.blog.edit');
    }
}
