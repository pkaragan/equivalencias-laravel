<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TipoUser::class)->create(['nombre'=>'Admin']);
        factory(App\TipoUser::class)->create(['nombre'=>'Alumno']);

        factory(App\User::class, 20)->create();

        factory(App\Admin::class, 15)->create();
        factory(App\Universidad::class, 15)->create();
        factory(App\Campus::class, 15)->create();
        factory(App\Carrera::class, 15)->create();
        factory(App\Materia::class, 15)->create();
        factory(App\CampusUacj::class, 15)->create();
        factory(App\CarreraUacj::class, 15)->create();
        factory(App\MateriaUacj::class, 15)->create();
        factory(App\Alumno::class, 15)->create();
    }
}
