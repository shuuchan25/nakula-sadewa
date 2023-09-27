<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culinary extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category() {
        return $this->belongsTo(CulinaryCategory::class, 'category_id');
    }

    public function images() {
        return $this->hasMany(CulinaryImage::class);
    }

    public function menus() {
        return $this->hasMany(CulinaryMenu::class);
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
