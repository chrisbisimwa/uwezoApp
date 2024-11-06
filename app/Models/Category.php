<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'is_active',
    ];

    public function artistes()
    {
        return $this->belongsToMany(Artiste::class, 'artistes_categories');
    }
}
