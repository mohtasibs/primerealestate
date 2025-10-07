<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $fillable = [
        'property_id',
        'image',     // just filename, stored in DB
        'alt_text',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    // Helper: return full image URL
    public function getImageUrlAttribute()
    {
        return asset('assets/img/' . $this->image);
    }
}
