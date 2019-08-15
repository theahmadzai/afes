<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Subscriber;
use Faker\Generator as Faker;

$factory->define(Subscriber::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
    ];
});
