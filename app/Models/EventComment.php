<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{
    //
    use HasFactory;

    protected $table = 'event_comments'; 
    
    protected $fillable = [ 
        'event_id', 
        'user_id', 
        'content', 
        'status'
     ]; 
    
    protected $dates = [ 
        'created_at', 
        'updated_at' 
    ];

    public function event() { 
        return $this->belongsTo(Event::class); 
    }
    
    public function user() { 
        return $this->belongsTo(User::class); 
    }
}
