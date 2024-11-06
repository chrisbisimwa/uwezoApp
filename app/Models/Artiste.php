<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artiste extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'surname',
        'slug',
        'email',
        'phone',
        'biography',
        'image',
        'website',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
        'is_subscribed',
        'is_active',
    ];
    
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'artistes_categories');
    }
}
