<?php

namespace Database\Seeders;

use App\Models\posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\images;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = posts::factory(100)->create();
        foreach ($posts as $post) {
            images::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => posts::class
            ]);
            $post->tags()->attach([
                rand(1,4),
                rand(5,8)
            ]);
        }
    }
}
