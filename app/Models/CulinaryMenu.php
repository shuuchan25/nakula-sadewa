<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulinaryMenu extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['menu_category_id'];

    public function culinary() {
        return $this->belongsTo(Culinary::class);
    }

    public function menuCategory() {
        return $this->belongsTo(CulinaryMenuCategory::class, 'menu_category_id');
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
