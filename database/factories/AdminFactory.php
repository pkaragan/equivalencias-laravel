<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [      
        'user_id'=>$faker->randomElement([1,20]),
        'nivel'=>$faker->randomElement([1,3]),
    ];
});
