<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Scopes\Searchable;
use Carbon\Carbon;
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
        'organizer',
        'organizer_phone',
        'organizer_email',
        'artist_id',
        'author_id',
    ]; 
    
        protected $dates = [ 
        'start_date', 
        'end_date', 
        'created_at', 
        'updated_at' 
    ];

    protected $casts = [
        'start_date'=> 'datetime',
        'end_date'=> 'datetime',
        'created_at'=> 'datetime',
        'updated_at' => 'datetime'
    ];

    public function author(){
        return $this->belongsTo(User::class, 'author_id');
    }

    public function artist(){
        return $this->belongsTo(Artist::class,'artist_id');
    }

    public function categories()
    {
        return $this->belongsToMany(EventCategory::class, 'event_category_mappings');
    }

    public function eventcomments()
    {
        return $this->hasMany(EventComment::class, 'event_id');
    }

    public function short_content()
    {
        //parse html of the content to get the first 100 characters
        $description = strip_tags($this->description);
        return substr($description, 0, 200);
    }

    public function event_body_output()
    {
        return $this->description;
    }

    public function getDynamicSEOData(): SEOData
    {
        return new SEOData(
            title: $this->title,
            description: $this->short_content(),
            author: $this->author->name,
            image:"storage/uploads/".$this->image_path,
            url: route('front.events.event-detail', $this->title),
            published_time: $this->created_at,
            modified_time: $this->updated_at,
            tags: $this->categories->pluck('name')->toArray()

        );
    }

    


    /**
     * Met à jour le statut de l'événement en fonction des dates.
     */
    public function updateStatus()
    {
        $now = Carbon::now();

        if ($now->between($this->start_date, $this->end_date)) {
            $this->status = 'ongoing';
        } elseif ($now->gt($this->end_date)) {
            $this->status = 'completed';
        } else {
            $this->status = 'upcoming';
        }

        $this->save();
    }
    public function isUpcoming()
    {
        return Carbon::parse($this->start_date)->isFuture();
    }

    public function isOngoing()
    {
        $now = Carbon::now();
        return $now->between(Carbon::parse($this->start_date)->toIso8601String(), Carbon::parse($this->end_date)->toIso8601String());
    }
    public function getStartDateForJs() {
        return Carbon::parse($this->start_date)->toIso8601String();
    }

    public function getRemainingTime()
    {
        $now = Carbon::now();
        $diff = $now->diffInSeconds(Carbon::parse($this->start_date)->toIso8601String());

        $days = floor($diff / (60 * 60 * 24));
        $hours = floor(($diff - $days * 60 * 60 * 24) / (60 * 60));
        $minutes = floor(($diff - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
        $seconds = $diff - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minutes * 60;

        return [
            'days' => $days,
            'hours' => $hours,
            'minutes' => $minutes,
            'seconds' => $seconds,
        ];
    }
}
