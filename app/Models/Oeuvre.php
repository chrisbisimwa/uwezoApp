<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    //
    protected $fillable = [
        'nom', 'type', 'description', 'price', 'image', 'source', 'date', 'statut'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }


}
