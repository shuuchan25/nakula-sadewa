<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionSubCategory extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function attractions() {
        return $this->hasMany(Attraction::class);
    }

    public function category() {
        return $this->belongsTo(AttractionCategory::class, 'category_id');
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
