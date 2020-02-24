<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\Campus;
use Faker\Generator as Faker;

$factory->define(Campus::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
        'universidad_id'=>$faker->randomElement([1,10]),
    ];
});
