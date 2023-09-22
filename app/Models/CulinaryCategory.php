<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulinaryCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function culinaries() {
        return $this->hasMany(Culinary::class);
    }
}
