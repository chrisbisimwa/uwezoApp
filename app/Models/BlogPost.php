<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;

class BlogPost extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'author_id',
        'featured_image',
        'status',
    ];
    protected $searchableFields = ['*'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_post_categories');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
}
