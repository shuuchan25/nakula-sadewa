<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attractions() {
        return $this->hasMany(Attraction::class);
    }

    public function subCategory() {
        return $this->hasMany(AttractionSubCategory::class, 'category_id');
    }
}
