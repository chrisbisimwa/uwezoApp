<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'biography',
        'photo',
        'abonnement',
        'numeroCertificat',
        'phone',
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

}
