<?php

namespace Database\Seeders;

use App\Models\AttractionSubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttractionSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AttractionSubCategory::create([
            'name' => 'Bahari',
            'category_id' => '1'
        ]);

        AttractionSubCategory::create([
            'name' => 'Ekowisata',
            'category_id' => '1'
        ]);

        AttractionSubCategory::create([
            'name' => 'Petualangan',
            'category_id' => '1'
        ]);
    }
}
