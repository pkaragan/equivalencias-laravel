<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Universidad;
use Faker\Generator as Faker;

$factory->define(Universidad::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'telefono'=>$faker->phoneNumber,
        'direccion'=>$faker->address,
        'iniciales'=>$faker->name,
        'tipo'=>$faker->name,
        'pais'=>$faker->country,
        'estado'=>$faker->state,
        'ciudad'=>$faker->city,
    ];
});
