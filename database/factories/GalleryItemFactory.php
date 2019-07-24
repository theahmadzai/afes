<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\GalleryItem;
use App\Category;
use Faker\Generator as Faker;

$factory->define(GalleryItem::class, function (Faker $faker) {
    return [
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray())
    ];
});
