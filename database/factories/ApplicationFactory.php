<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['Male', 'Female']),

    ];
});
