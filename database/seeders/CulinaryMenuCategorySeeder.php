<?php

namespace Database\Seeders;

use App\Models\CulinaryMenuCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CulinaryMenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CulinaryMenuCategory::create([
            'name' => 'Makanan'
        ]);

        CulinaryMenuCategory::create([
            'name' => 'Minuman'
        ]);
    }
}
