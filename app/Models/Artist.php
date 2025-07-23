<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Events\ArtistPublished;
use RalphJSmit\Laravel\SEO\Support\SEOData;

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

    public function shortBiography()
    {
        $content = strip_tags($this->biography);
        return substr($content, 0, 200);
    }

    

    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
    }

    public function getDynamicSEOData():  SEOData
    {
    
        return new SEOData(
            title: $this->nom . ' ' . $this->prenom,
            description: $this->shortBiography(),
            image: "storage/uploads/".$this->photo ,
            url: route('front.artisteDetail', ['slug' => $this->slug]),
            tags: ['artist', 'artiste', 'art'],
        );


    }

}
