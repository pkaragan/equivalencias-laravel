<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Carrera;
use Faker\Generator as Faker;

$factory->define(Carrera::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'campus_id'=>$faker->randomElement([1,5]),
    ];
});
