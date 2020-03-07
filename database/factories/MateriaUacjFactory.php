<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\MateriaUacj;
use Faker\Generator as Faker;

$factory->define(MateriaUacj::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'clave'=>$faker->word,
        'creditos'=>$faker->randomElement([1,8]),
        'obligatoria'=>$faker->boolean(),
        'semestre'=>$faker->randomElement([1,9]),
    ];
});
