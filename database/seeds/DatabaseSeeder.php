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
        factory(App\Models\Seguridad\User::class, 20)->create();
        factory(App\Models\Admin\Admin::class, 15)->create();             

        $this->call(UsuarioAdministradorSeeder::class);
        $this->call(UniversidadSeeder::class);
        $this->call(CampusUacjSeeder::class);        
        $this->call(CampusSeeder::class);        
        $this->call(CarreraSeeder::class);   
        $this->call(CarreraUacjSeeder::class);   
        $this->call(PlanCarreraSeeder::class);   
        $this->call(PlanCarreraUacjSeeder::class);   
   
        factory(App\Models\Admin\Materia::class, 15)->create();
        factory(App\Models\Admin\MateriaUacj::class, 15)->create();

        $this->call(MateriaPlanSeeder::class);   

        factory(App\Models\Admin\Alumno::class, 15)->create();
        
    }
}
