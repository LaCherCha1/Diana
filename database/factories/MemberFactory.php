<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    $instagram = "{$faker->firstName}{$faker->lastName}";
    return [
        'name' => $faker->name,
        'last_name' => $faker->lastName,
        'instagram' => $faker->optional()->passthrough($instagram),
        'email' => $faker->unique()->safeEmail,
        'password' => Str::random(6),        
    ];
});
