<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttractionPackageImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function attractionPackage() {
        return $this->belongsTo(AttractionPackage::class);
    }
}
