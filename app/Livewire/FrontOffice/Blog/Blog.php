<?php

namespace App\Livewire\FrontOffice\Blog;

use Livewire\Component;
use App\Models\BlogPost;
use Livewire\WithPagination;

class Blog extends Component
{
    use WithPagination;
    

    public function render()
    {
        $blogPosts = BlogPost::where('status', 'published')->latest()->paginate(6);

        return view('livewire.front-office.blog.blog',  compact('blogPosts') );
    }
}
