<?php

namespace App\Mail;

use App\Models\Artist;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewBlogPostNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $artist;

    public function __construct(Artist $artist)
    {
        $this->blogPost = $artist;
    }

    public function build()
    {
        return $this->subject('Nouvel artiste disponible !')
                    ->view('emails.new_artist');
    }
}