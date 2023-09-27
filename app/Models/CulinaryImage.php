<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulinaryImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function culinary() {
        return $this->belongsTo(Culinary::class);
    }
}
