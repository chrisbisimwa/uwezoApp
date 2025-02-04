<?php

namespace App\Mail;

use App\Models\BlogPost;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewBlogPostNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $blogPost;

    public function __construct(BlogPost $blogPost)
    {
        $this->blogPost = $blogPost;
    }

    public function build()
    {
        return $this->subject('Nouvel article de blog disponible !')
                    ->view('emails.new_blog_post');
    }
}