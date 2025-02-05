<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Oeuvre extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom', 'type', 'description', 'price', 'image', 'source', 'date', 'statut'
    ];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }


}
