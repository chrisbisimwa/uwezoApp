<?php

namespace App\Events;

use App\Models\Artist;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ArtistPublished
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $artist;

    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }
}