<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'slug' => $faker->slug,
        'body' => $faker->sentence(200),
        'is_published' => $faker->boolean,
        'published_at' => now()->subDays(random_int(1, 180)),
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
    ];
});
