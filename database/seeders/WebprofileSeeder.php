<?php

namespace Database\Seeders;

use App\Models\Webprofile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebprofileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Webprofile::create([
            'slogan' => 'Trenggalek Southern Paradise',
            'shortdesc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam consequuntur ad debitis ea expedita, soluta quaerat ullam adipisci nobis aliquam, omnis eaque maxime odit quas voluptatum quasi, eos iusto',
            'image' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/12/03/1311855950.jpg',
            'video' => 'https://www.youtube.com/watch?v=cpZ9li2m_Uc',
        ]);
    }
}