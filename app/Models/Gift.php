<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }

    public function shop() {
        return $this->belongsTo(Shop::class, 'shop_id');
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