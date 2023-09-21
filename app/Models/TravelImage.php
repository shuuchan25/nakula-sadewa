<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function travel() {
        return $this->belongsTo(Travel::class);
    }
}