<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Admin\CampusUacj;
use App\Models\Admin\CarreraUacj;
use Faker\Generator as Faker;

$factory->define(CarreraUacj::class, function (Faker $faker) {
    $campusUacj=CampusUacj::all()->pluck('id')->toArray();
    
    return [
        'nombre'=>$faker->name,
        'campus_uacj_id'=>$faker->randomElement($campusUacj),
    ];
});
