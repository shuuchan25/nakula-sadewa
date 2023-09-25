<?php

namespace Database\Seeders;

use App\Models\AttractionCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttractionCategory::create([
            'name' => 'Alam'
        ]);

        AttractionCategory::create([
            'name' => 'Budaya'
        ]);

        AttractionCategory::create([
            'name' => 'Buatan'
        ]);
    }
}
