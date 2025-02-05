<?php

namespace App\Listeners;

use App\Events\ArtistPublished;
use App\Mail\NewBlogPostNotification;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Mail;

class SendNewsletterForNewArtist
{
    public function handle(ArtistPublished $event)
    {
        $subscribers = NewsletterSubscription::where('is_subscribed', true)->get();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewBlogPostNotification($event->artist));
        }
    }
}