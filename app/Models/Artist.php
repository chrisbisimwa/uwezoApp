<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    
    protected $fillable = [
        'nom',
        'prenom',
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
        'category_id',
        'datenaissance'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /* public function events()
    {
        return $this->belongsToMany(Evenement::class);
    } */

    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }

    public function oeuvres()
    {
        return $this->hasMany(Oeuvre::class);
    }

}
