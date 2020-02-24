<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\CampusUacj;
use Faker\Generator as Faker;

$factory->define(CampusUacj::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->name,
    ];
});
