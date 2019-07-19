<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\GalleryItem;
use Faker\Generator as Faker;

$factory->define(GalleryItem::class, function (Faker $faker) {
    return [
        'category_id' => $faker->randomElement(App\Category::pluck('id')->toArray())
    ];
});