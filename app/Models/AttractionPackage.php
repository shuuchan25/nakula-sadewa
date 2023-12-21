<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AttractionPackage extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    // Define accessor for image URL
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function attraction() {
        return $this->belongsTo(Attraction::class, 'attraction_id');
    }

    public function images() {
        return $this->hasMany(AttractionPackageImage::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}