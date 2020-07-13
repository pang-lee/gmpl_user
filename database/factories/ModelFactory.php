<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'password'=> $faker->randomNumber($nbDigits = NULL, $strict = false),
        'email' => $faker->email,
    ];
});

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->email,
//         'password'=> $faker->randomNumber($nbDigits = NULL, $strict = false),
//         'phone' => $faker->randomNumber($nbDigits = NULL, $strict = false),
//         'last_login_ip' => $faker->latitude($min = -90, $max = 90),
//         'last_login' => $faker->dateTime($max = 'now', $timezone = null),
//         'created_ip' => $faker->latitude($min = -90, $max = 90)
//     ];
// });
