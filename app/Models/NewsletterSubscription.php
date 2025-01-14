<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscription extends Model
{
    protected $fillable = [
        'email',
        'is_subscribed',
        'subscribed_at',
        'unsubscribed_at',
    ];

    protected $casts = [
        'is_subscribed' => 'boolean',
        'subscribed_at' => 'datetime',
        'unsubscribed_at' => 'datetime',
    ];

    public function scopeSubscribed($query)
    {
        return $query->where('is_subscribed', true);
    }

    public function scopeUnsubscribed($query)
    {
        return $query->where('is_subscribed', false);
    }

    public function subscribe()
    {
        $this->is_subscribed = true;
        $this->subscribed_at = now();
        $this->unsubscribed_at = null;
        $this->save();
    }

    public function unsubscribe()
    {
        $this->is_subscribed = false;
        $this->unsubscribed_at = now();
        $this->save();
    }

    public function toggleSubscription()
    {
        if ($this->is_subscribed) {
            $this->unsubscribe();
        } else {
            $this->subscribe();
        }
    }

    public function isSubscribed()
    {
        return $this->is_subscribed;
    }

  
    public function scopeSubscribedAt($query, $date)
    {
        return $query->where('subscribed_at', '>=', $date);
    }

    public function scopeUnsubscribedAt($query, $date)
    {
        return $query->where('unsubscribed_at', '>=', $date);
    }


}
