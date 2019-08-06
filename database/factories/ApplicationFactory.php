<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Application;
use Faker\Generator as Faker;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['Male', 'Female']),
        'marital_status' => $faker->randomElement(['SINGLE', 'MARRIED', 'WIDOWED', 'SEPARATED', 'DIVORCED']),
        'date_of_birth' => $faker->dateTimeThisCentury,
        'cnic' => $faker->randomNumber,
        'city' => $faker->city,
        'address' => $faker->address,
        'contact_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'about_us' => $faker->realText(200),
        'status' => $faker->randomElement(['Accepted', 'Pending', 'Rejected']),
    ];
});
