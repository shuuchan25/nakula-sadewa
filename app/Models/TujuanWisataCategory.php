<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanWisataCategory extends Model
{
    use HasFactory;

    public function tujuanWisataItems() {
        return $this->hasMany(TujuanWisataItem::class);
    }
}
