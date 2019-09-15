<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Application;
use Faker\Generator as Faker;
use App\Job;

$factory->define(Application::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->randomElement(['Male', 'Female']),
        'marital_status' => $faker->randomElement(['Single', 'Married', 'Widowed', 'Separated', 'Divorced']),
        'birth_date' => $faker->date,
        'nid' => $faker->randomNumber,
        'city' => $faker->city,
        'address' => $faker->address,
        'contact_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'about_us' => $faker->realText(200),
        'status' => $faker->randomElement(['Accepted', 'Pending', 'Rejected']),
        'job_id' => $faker->randomElement(Job::pluck('id')->toArray()),
    ];
});
