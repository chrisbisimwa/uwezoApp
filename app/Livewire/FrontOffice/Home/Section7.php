<?php

namespace App\Livewire\FrontOffice\Home;

use Livewire\Component;
use App\Models\BlogPost;

class Section7 extends Component
{
    public function render()
    {
        $posts = BlogPost::where('status', 'published')->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.front-office.home.section7', compact('posts'));
    }
}
