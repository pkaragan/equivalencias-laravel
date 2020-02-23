<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Equivalencias;
use Faker\Generator as Faker;

$factory->define(Equivalencias::class, function (Faker $faker) {
    return [

        'materia_uacj_id'=>$faker->randomElement([1,20]),  
        'materia_id'=>$faker->randomElement([1,15]),  

    ];
});
