<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'caption' => $faker->sentence(6),
        'filename' => 'default/image.png',
        'created_at' => now()->subDays(random_int(1, 180)),
    ];
});
