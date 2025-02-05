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
        $this->artist = $artist;
    }


    public function build()
    {
        return $this->subject('Un nouvel artiste disponible sur SANAA YETU!')
                    ->view('emails.new_artist');
    }
}