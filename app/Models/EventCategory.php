<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    //
    use HasFactory; 

    protected $table = 'event_categories'; 

    protected $fillable = [ 
        'name', 
        'description' 
    ]; 
    
    protected $dates = [ 
        'created_at', 
        'updated_at' 
    ];
}
