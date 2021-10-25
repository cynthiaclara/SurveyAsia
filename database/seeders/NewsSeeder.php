<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'id' => 1,
            'title' => 'Benarkah Lulusan Matematika Hanya Bisa Jadi Guru?',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorum esse laudantium autem deserunt dolor earum omnis eveniet adipisci cumque reiciendis, dolorem saepe! Unde nisi facere quia a. In, facere!',
            'status' => '0',
            'category' => '1',
            'author' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        News::create([
            'id' => 2,
            'title' => 'Bahkan lulusan pendidikan matematika ',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorum esse laudantium autem deserunt dolor earum omnis eveniet adipisci cumque reiciendis, dolorem saepe! Unde nisi facere quia a. In, facere!',
            'status' => '0',
            'category' => '1',
            'author' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        News::create([
            'id' => 3,
            'title' => 'Di era digital ini, profesi yang berkaitan dengan teknologi',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorum esse laudantium autem deserunt dolor earum omnis eveniet adipisci cumque reiciendis, dolorem saepe! Unde nisi facere quia a. In, facere!',
            'status' => '0',
            'category' => '1',
            'author' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
