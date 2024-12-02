<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    use HasFactory; 

    protected $table = 'events'; 

    protected $fillable = [ 
        'title', 
        'description', 
        'location', 
        'start_date',
        'end_date', 
        'image_path', 
        'status' 
    ]; 
        protected $dates = [ 
        'start_date', 
        'end_date', 
        'created_at', 
        'updated_at' 
    ];

    public function categories()
    {
        return $this->belongsToMany(EventCategory::class, 'event_post_categories');
    }

    public function comments()
    {
        return $this->hasMany(EventComment::class);
    }
}
