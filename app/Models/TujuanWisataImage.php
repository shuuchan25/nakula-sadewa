<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TujuanWisataImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tujuanWisataItem() {
        return $this->belongsTo(TujuanWisataItem::class);
    }
}
