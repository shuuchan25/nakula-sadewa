<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class AttractionCategory extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function attractions() {
        return $this->hasMany(Attraction::class);
    }

    public function subCategory() {
        return $this->hasMany(AttractionSubCategory::class);
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
