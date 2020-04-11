<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Tag;
use App\Image;
use Illuminate\Support\Collection;

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
        $imageFileNames = new Collection(['s1.jpg', 's2.jpg', 's3.jpg']);

        factory(Post::class, 10)->create()->each(function ($post) use ($tags, $imageFileNames) {
            $post->image()->save(factory(Image::class)->make([
                'filename' => $imageFileNames->random(1)->implode(''),
            ]));
            $post->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
