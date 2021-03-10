<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role_id'=> $faker->numberBetween($min = 2, $max = 3), // 1 is for admin
        'status'=> 'active',
        'email_verified_at' => now(),
        'password' => bcrypt('demo123'),
        'remember_token' => Str::random(10),
    ];
});
