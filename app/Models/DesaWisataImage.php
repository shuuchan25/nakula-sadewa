<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesaWisataImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function desaWisataItem() {
        return $this->belongsTo(DesaWisataItem::class);
    }
}
