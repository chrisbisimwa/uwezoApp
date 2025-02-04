<?php

namespace App\Listeners;

use App\Events\BlogPostPublished;
use App\Mail\NewBlogPostNotification;
use App\Models\NewsletterSubscription;
use Illuminate\Support\Facades\Mail;

class SendNewsletterForNewPost
{
    public function handle(BlogPostPublished $event)
    {
        $subscribers = NewsletterSubscription::where('is_subscribed', true)->get();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewBlogPostNotification($event->blogPost));
        }
    }
}