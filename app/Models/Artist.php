<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    //


    public function categories()
    {
        return $this->belongsToMany(ArtworkCategory::class, 'artwork_categories');
    }

}
