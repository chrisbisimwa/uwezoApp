<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;

class BlogCategory extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['name', 'description'];

    public function blogPosts()
    {
        return $this->belongsToMany(BlogPost::class, 'blog_post_categories');
    }
}
