<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;

class Category extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name'];

    public function artists()
    {
        return $this->belongsToMany(Artist::class, 'artist_categories');
    }
}
