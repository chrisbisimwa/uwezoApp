<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class EventCategory extends Model
{
    //
    use HasFactory; 
    use Searchable;

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
