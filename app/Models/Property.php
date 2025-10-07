<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'address',     
        'price',
        'rent',
        'deposit',
        'bedrooms',
        'bathrooms',
        'size',
        'year_built',
        'property_type',
        'status',
        'description',
        'latitude',
        'longitude',
    ];

    // elationship with images
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    // virtual "main_image" attribute for views
    public function getMainImageAttribute()
    {
        return $this->images()->first()?->image ?? 'default.jpg';
    }

    // virtual "location" alias (maps to address)
    public function getLocationAttribute()
    {
        return $this->address;
    }
}
