<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Image;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();

        Post::flushEventListeners();

        factory(Post::class, 20)->create()->each(function ($post) use ($tags) {
            $post->image()->save(factory(Image::class)->make());
            $post->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
