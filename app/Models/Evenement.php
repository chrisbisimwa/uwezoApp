<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class Evenement extends Model
{
    //
    use HasFactory; 
    use Searchable;

    protected $table = 'events'; 

    protected $searchableFields = ['*'];

    protected $fillable = [ 
        'title', 
        'description', 
        'location', 
        'start_date',
        'end_date', 
        'image_path', 
        'status',
        'author_id'
    ]; 
        protected $dates = [ 
        'start_date', 
        'end_date', 
        'created_at', 
        'updated_at' 
    ];

    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    public function categories()
    {
        return $this->belongsToMany(EventCategory::class, 'event_post_categories');
    }

    public function comments()
    {
        return $this->hasMany(EventComment::class, );
    }
}
