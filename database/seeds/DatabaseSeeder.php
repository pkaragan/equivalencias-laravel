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
        factory(App\Models\Admin\TipoUser::class)->create(['nombre'=>'Admin']);
        factory(App\Models\Admin\TipoUser::class)->create(['nombre'=>'Alumno']);

        $this->call(UsuarioAdministradorSeeder::class);

        factory(App\Models\Seguridad\User::class, 20)->create();

        factory(App\Models\Admin\Admin::class, 15)->create();
        factory(App\Models\Admin\Universidad::class, 15)->create();
        factory(App\Models\Admin\Campus::class, 15)->create();
        factory(App\Models\Admin\Carrera::class, 15)->create();
        factory(App\Models\Admin\Materia::class, 15)->create();
        factory(App\Models\Admin\CarreraUacj::class, 15)->create();
        factory(App\Models\Admin\MateriaUacj::class, 15)->create();
        factory(App\Models\Admin\Alumno::class, 15)->create();
    }
}
