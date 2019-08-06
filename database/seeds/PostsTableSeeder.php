<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\File;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::flushEventListeners();

        $tags = Tag::all();

        factory(Post::class, 20)->create()->each(function ($post) use ($tags) {
            $post->file()->save(factory(File::class)->make());
            $post->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
