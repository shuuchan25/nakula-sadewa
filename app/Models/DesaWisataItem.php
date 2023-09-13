<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaWisataItem extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category'];

    // Define accessor for image URL
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function category() {
        return $this->belongsTo(DesaWisataCategory::class);
    }

    public function images() {
        return $this->hasMany(DesaWisataImage::class);
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
