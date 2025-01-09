<?php

namespace App\Livewire\BackOffice\Blog;

use Livewire\Component;
use App\Models\BlogCategory;

class Edit extends Component
{
    public $categories;
    public $selectedCategories = [];
    public $content = '';
    public $tags;
    public $imageNames = [];
    public $status = 'published';
    public $title;
    public $trixId;
    public $photos = [];
    public $cover_image;
    public $featured_image;

    public function mount($post)
    {
        $this->title = $post->title;
        $this->content = $post->content;
        $this->status = $post->status;
        $this->selectedCategories = $post->categories->pluck('id')->toArray();
        //$this->featured_image = $post->featured_image;

        //dd($post->categories);
        $this->dispatch('post-loaded', content: $post->content);
    }

    public function render()
    {
        $this->categories = BlogCategory::all();
        return view('livewire.back-office.blog.edit');
    }
}
