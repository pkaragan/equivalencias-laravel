<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Alumno;
use Faker\Generator as Faker;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomElement([1,20]),
        'nombre'=>$faker->name,
        'carrera_id'=>$faker->randomElement([1,10]),
        'semestre'=>$faker->randomElement([1,9]),        
    ];
});
