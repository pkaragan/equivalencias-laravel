<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Universidad;
use Faker\Generator as Faker;

$factory->define(Universidad::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,        
        'iniciales'=>$faker->name,
        'tipo'=>$faker->name,
        'pais'=>$faker->country,        
    ];
});
