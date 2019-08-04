<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Job;
use Faker\Generator as Faker;

$factory->define(Job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'job_profile' => $faker->text(500),
        'skills' => $faker->text(200),
        'tools' => $faker->text(100),
        'department' => $faker->randomElement(['EDUCATION', 'HUMAN', 'FINANCE']),
        'minimum_education' => $faker->randomElement(['BS(CS)', 'MS(CS)', 'BBA', 'ITM']),
        'location' => $faker->randomElement(['Kabul', 'Khost', 'Balkh']),
        'required_languages' => $faker->randomElement(['English', 'Pashto', 'Pashto, English']),
        'total_positions' => $faker->randomDigitNotNull,
        'shift' => $faker->randomElement(['Morning', 'Evening']),
        'gender' => $faker->randomElement(['Male', 'Female', 'Any']),
        'work_type' => $faker->randomElement(['Part-Time', 'Full-Time']),
        'experience' => $faker->randomElement(['Fresh', '1-2 Years', '3-4 Years', '5 > Years']),
        'status' => $faker->randomElement(['Open', 'Closed']),
        'date_posted' => now()->subDays(random_int(1, 60)),
        'closing_date' => now()->subDays(random_int(60, 180)),
    ];
});
