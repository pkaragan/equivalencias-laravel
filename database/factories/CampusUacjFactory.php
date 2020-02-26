<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\CampusUacj;
use Faker\Generator as Faker;

$factory->define(CampusUacj::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'estado'=>$faker->state,
        'ciudad'=>$faker->city,
        'calle'=>$faker->streetAddress,        
        'numero'=>$faker->randomNumber([1,9999]),        
        'cp'=>$faker->randomNumber([1,9999]),
        'telefono'=>$faker->phoneNumber,
    ];
});
