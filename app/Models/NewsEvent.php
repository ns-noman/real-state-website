<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsEvent extends Model
{
    protected $table = 'news_events';

    protected $fillable = [
        'heading',
        'shortDescription',
        'description',
        'source',
        'writter',
        'date',
        'type',
        'link',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get all images associated with this news event
     */
    public function images()
    {
        return $this->hasMany(NewsEventGallery::class, 'newsEventID');
    }

    /**
     * Get the first image (for display purposes)
     */
    public function getFirstImageAttribute()
    {
        return $this->images->first()?->image;
    }

    /**
     * Scope to get news only
     */
    public function scopeNews($query)
    {
        return $query->where('type', 1);
    }

    /**
     * Scope to get events only
     */
    public function scopeEvents($query)
    {
        return $query->where('type', 2);
    }

    /**
     * Scope to order by latest date
     */
    public function scopeLatest($query)
    {
        return $query->orderBy('date', 'desc');
    }

    /**
     * Check if this is a news item
     */
    public function isNews()
    {
        return $this->type == 1;
    }

    /**
     * Check if this is an event
     */
    public function isEvent()
    {
        return $this->type == 2;
    }
}