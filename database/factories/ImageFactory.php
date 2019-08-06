<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Image;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'caption' => $faker->sentence(6),
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray())
    ];
});
