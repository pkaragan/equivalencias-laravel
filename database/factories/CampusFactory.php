<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Campus;
use Faker\Generator as Faker;

$factory->define(Campus::class, function (Faker $faker) {
    
    $campus=Campus::all()->pluck('id')->toArray();        
    
    return [
        'nombre'=>$faker->name,
        'estado'=>$faker->state,
        'ciudad'=>$faker->city,
        'calle'=>$faker->streetAddress,        
        'numero'=>$faker->randomNumber([1,9999]),        
        'cp'=>$faker->randomNumber([1,9999]),
        'telefono'=>$faker->phoneNumber,        
        'universidad_id'=>$faker->randomElement($campus),
    ];    
});
