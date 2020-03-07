<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => 'Tester Bot',
        'email' => 'tester@test.com',
        'email_verified_at' => now(),
        'password' => Hash::make('tester'),
        'remember_token' => Str::random(10),
    ];
});
