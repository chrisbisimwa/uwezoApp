<?php

namespace App\Livewire\BackOffice\Blog;

use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $trixId;
    public $photos = [];
    public $cover_image;
    public $content = '';
    public $tags;
    public $imageNames = [];

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

    


    public function render()
    {
        return view('livewire.back-office.blog.create');
    }
}
