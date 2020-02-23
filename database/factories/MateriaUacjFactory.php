<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\MateriaUacj;
use Faker\Generator as Faker;

$factory->define(MateriaUacj::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'carrera_uacj_id'=>$faker->randomElement([1,5]),
        'creditos'=>$faker->randomElement([1,8]),
        'obligatoria'=>$faker->boolean(),
        'semestre'=>$faker->randomElement([1,9]),
    ];
});
