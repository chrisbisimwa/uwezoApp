<?php

namespace App\Livewire\FrontOffice\Blog;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;



class Comment extends Component
{
    use LivewireAlert;

    public $blogPost;
    public $comment;

    protected $rules = [
        'comment' => 'required'
    ];

    protected $messages = [
        'comment.required' => 'Le commentaire est obligatoire.'
    ];

    public function mount($blogPost)
    {
        $this->blogPost = $blogPost;
    }

    public function commenter()
    {
        $this->validate([
            'comment' => 'required'
        ]);

        $this->blogPost->comments()->create([
            'content' => $this->comment,
            'user_id' => Auth::user()->id
        ]);

        $this->comment = '';

       
        $this->alert('success', 'Votre commentaire a été ajouté pour validation', [
            'position' =>  'top-end',
            'timer' =>  3000,
            'toast' =>  true,
            'text' =>  '',
            'confirmButtonText' =>  'Fermer',
            'cancelButtonText' =>  'Annuler',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  false,
        ]);
    }

    public function render()
    {
        $comments = $this->blogPost->comments()->get();
        return view('livewire.front-office.blog.comment', compact('comments'));
    }
}
