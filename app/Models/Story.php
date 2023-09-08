<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Story extends Model
{
    use HasFactory, Sluggable;
    
    protected $guarded = ['id'];

    // Define accessor for image URL
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function getRouteKeyName() {
        return 'slug';
    }

    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
