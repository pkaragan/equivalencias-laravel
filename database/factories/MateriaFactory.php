<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Materia;
use Faker\Generator as Faker;

$factory->define(Materia::class, function (Faker $faker) {
    return [

        'nombre'=>$faker->name,
        'carrera_id'=>$faker->randomElement([1,5]),
    ];
});
