<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $table = 'travels';


    // Define accessor for image URL
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function images() {
        return $this->hasMany(TravelImage::class);
    }

    public function menus() {
        return $this->hasMany(TravelMenu::class);
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