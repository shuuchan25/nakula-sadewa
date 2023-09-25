<?php

namespace Database\Seeders;

use App\Models\MapCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MapCategory::create([
            'name' => 'Hotel',
            'slug' => 'hotel',
            'image' => 'https://www.svgrepo.com/show/425480/hotel-room-travel.svg'
        ]);
        MapCategory::create([
            'name' => 'Masjid',
            'slug' => 'masjid',
            'image' => 'https://www.svgrepo.com/show/425480/hotel-room-travel.svg'
        ]);
        MapCategory::create([
            'name' => 'Lokasi Wisata',
            'slug' => 'lokasi-wisata',
            'image' => 'https://www.svgrepo.com/show/425480/hotel-room-travel.svg'
        ]);
    }
}