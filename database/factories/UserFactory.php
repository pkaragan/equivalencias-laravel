<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Seguridad\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'tipo_user_id'=>$faker->randomElement([1,2]),
        'usuario' => $faker->slug(3),
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'telefono' => $faker->phoneNumber,
        'estado' => $faker->state,
        'ciudad' => $faker->city,
        'calle' => $faker->streetAddress,
        'numero' => $faker->numberBetween(199,9999),
        'colonia' => $faker->name,
        'cp' => $faker->numberBetween(00000,99999),
        'fecha_nac' => $faker->date(),
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),               
        'status'=>1,

    ];
});
