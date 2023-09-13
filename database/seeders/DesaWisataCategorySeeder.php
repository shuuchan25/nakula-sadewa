<?php

namespace Database\Seeders;

use App\Models\DesaWisataCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesaWisataCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DesaWisataCategory::create([
            'name' => 'Wisata Budaya'
        ]);

        DesaWisataCategory::create([
            'name' => 'Wisata Religi'
        ]);
    }
}
