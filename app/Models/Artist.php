<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\ArtistPublished

class Artist extends Model
{
    
    protected $fillable = [
        'nom',
        'prenom',
        'slug',
        'email',
        'genre',
        'biography',
        'photo',
        'abonnement',
        'numeroCerticat',
        'phone',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'soundcloud_link',
        'youtube_link',
        'tiktok_link',
        'category_id',
        'datenaissance'
    ];

    public static function boot()
    {
        parent::boot();

        static::saved(function ($artist) {
            if ($artist->created_at) {
                event(new ArtistPublished($artist));
            }
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }

    

    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
    }

}
