<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CarreraUacj;
use Faker\Generator as Faker;

$factory->define(CarreraUacj::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'campus_uacj_id'=>$faker->randomElement([1,5]),
    ];
});
