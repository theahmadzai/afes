<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\CarouselItem;
use Faker\Generator as Faker;

$factory->define(CarouselItem::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(10)
    ];
});
