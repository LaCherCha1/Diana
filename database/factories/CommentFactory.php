<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $members = App\Member::pluck('id')->toArray();
    $modules = App\Module::pluck('id')->toArray();
    return [
        'comment' => $faker->text(100), 
        'member_id' => $faker->randomElement($members),
        'module_id' => $faker->randomElement($modules)
    ];
    
   
});