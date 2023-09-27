<?php

namespace Database\Seeders;

use App\Models\CulinaryCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CulinaryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CulinaryCategory::create([
            'name' => 'Restaurant & Cafe'
        ]);

        CulinaryCategory::create([
            'name' => 'Makanan Tradisional'
        ]);
    }
}
