<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CulinaryMenuCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function culinaryMenus() {
        return $this->hasMany(CulinaryMenu::class);
    }
}
