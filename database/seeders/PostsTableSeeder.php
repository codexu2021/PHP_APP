<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 50)
        ->create()
        ->each(function ($post) {
            $comments = factory(App\Comment::class, 2)->make();
            $post->comments()->saveMany($comments);
        }
    );
    }
}
