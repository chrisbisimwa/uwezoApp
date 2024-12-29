<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use RalphJSmit\Laravel\SEO\Support\SEOData;

class EventComment extends Model
{
    //
    use HasFactory;
    use HasSEO;
    use Searchable;

    protected $table = 'event_comments'; 
    
    protected $fillable = [ 
        'evenement_id', 
        'user_id', 
        'content', 
        'status'
     ]; 
    
    protected $dates = [ 
        'created_at', 
        'updated_at' 
    ];

    public function event() { 
        return $this->belongsTo(Evenement::class); 
    }
    
    public function user() { 
        return $this->belongsTo(User::class); 
    }
}
