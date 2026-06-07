<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsEventGallery extends Model
{
    protected $table = 'news_event_galleries';

    protected $fillable = [
        'newsEventID',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the news event that owns this image
     */
    public function newsEvent()
    {
        return $this->belongsTo(NewsEvent::class, 'newsEventID');
    }

    /**
     * Get the full image path
     */
    public function getImagePathAttribute()
    {
        return asset('public/upload/' . $this->image);
    }
}