<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;
use App\Events\BlogPostPublished;

class BlogPost extends Model
{
    use HasFactory;
    use Searchable;
    use HasSEO;

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

    public static function boot()
    {
        parent::boot();

        static::saved(function ($blogPost) {
            if ($blogPost->status == 'published') {
                event(new BlogPostPublished($blogPost));
            }
        });
    }

    public function short_content()
    {
        //parse html of the content to get the first 100 characters
        $content = strip_tags($this->content);
        return substr($content, 0, 200);
    }

    public function post_body_output()
    {
        return $this->content;
    }

    public function categories()
    {
        return $this->belongsToMany(BlogCategory::class, 'blog_post_categories');
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title,
            description: $this->short_content(),
            author: $this->author->name,
            image: "storage/uploads/" . $this->featured_image,
            url: route('front.blog-post', $this->slug),
            published_time: $this->created_at,
            modified_time: $this->updated_at,
            tags: $this->categories->pluck('name')->toArray()

        );
    }
}
