<?php

use Illuminate\Database\Seeder;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'tipo_user_id'=>1,
            'usuario'=>'admin',
            'nombre'=>'Francisco',
            'apellido'=>'Mendoza',       
            'telefono'=>'6563769461',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Miravalle',
            'numero'=>'7912',
            'colonia'=>'Erendira',
            'cp'=>'32000',
            'fecha_nac'=>'1987-11-15',
            'email'=>'frgmendoza@gmail.com',
            'password' => bcrypt('admin'),
            'status' => 1
        ]);
    }
}
