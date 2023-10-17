<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTempCalculate extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tempCalculate() {
        return $this->belongsTo(TempCalculate::class, 'temp_id');
    }
}
