<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'file_type',
        'mediaable_id',
        'mediaable_type',
    ];

    public function mediaable()
    {
        return $this->morphTo();
    }

    
}
