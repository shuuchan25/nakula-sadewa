<?php

namespace Database\Seeders;

use App\Models\TujuanWisataCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TujuanWisataCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TujuanWisataCategory::create([
            'name' => 'Wisata Bahari'
        ]);

        TujuanWisataCategory::create([
            'name' => 'Wisata Kuliner'
        ]);
    }
}
