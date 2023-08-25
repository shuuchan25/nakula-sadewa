<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Gak Tau Mau Dikasih Judul Apa',
            'image' => 'assets/img/koma.png',
            'author' => 'Shuuchan',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ipsam consequuntur ad debitis ea expedita, soluta quaerat ullam adipisci nobis aliquam, omnis eaque maxime odit quas voluptatum quasi, eos iusto',
            'published_at' => null,
        ]);
    }
}
