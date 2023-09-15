<?php

namespace Database\Seeders;

use App\Models\HotelCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HotelCategory::create([
            'name' => 'Hotel'
        ]);

        HotelCategory::create([
            'name' => 'Villa'
        ]);
    }
}
