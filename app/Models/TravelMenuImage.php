<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelMenuImage extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function travelMenu() {
        return $this->belongsTo(TravelMenu::class);
    }
}
