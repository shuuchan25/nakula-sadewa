<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'author', 'content', 'published_at', 'image'];

    // Define accessor for image URL
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}