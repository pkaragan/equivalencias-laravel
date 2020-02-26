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

        DB::table('campus_uacj')->insert([
            'id'=>1,
            'nombre'=>'Instituto de Ingeniería y Tecnología',
            'iniciales'=>'IIT',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av del Charro',
            'numero'=>'402',
            'cp'=>32584,
            'telefono'=>'656 688 4843',                   
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>2,
            'nombre'=>'Instituto de Arquitectura, Diseño y Arte',
            'iniciales'=>'IADA',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av del Charro',
            'numero'=>'450',
            'cp'=>32584,
            'telefono'=>'656 688 4820',                   
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>3,
            'nombre'=>'Instituto de Ciencias Biomédicas',
            'iniciales'=>'ICB',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av. Benjamín Franklin',
            'numero'=>'4650',
            'cp'=>32310,
            'telefono'=>'656 688 1800',                   
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>4,
            'nombre'=>'Instituto de Ciencias Sociales y Administración',
            'iniciales'=>'ICSA',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>' Av. Universidad',
            'numero'=>'',
            'cp'=>32300,
            'telefono'=>'656 688 3800',                   
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>5,
            'nombre'=>'Nuevo Casas Grandes',
            'iniciales'=>'NCG',
            'estado'=>'Chihuahua',
            'ciudad'=>'Nuevo Casas Grandes',
            'calle'=>'Av. Universidad',
            'numero'=>'3003',
            'cp'=>31803,
            'telefono'=>'636 692 9800',                   
        ]);

    }
}
