<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Slide;
use Faker\Generator as Faker;

$factory->define(Slide::class, function (Faker $faker) {
    return [
        'caption' => $faker->sentence(6),
        'description' => $faker->sentence(10),
    ];
});
