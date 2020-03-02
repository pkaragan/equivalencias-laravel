<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CampusUacjSeeder extends Seeder
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
            'numero'=>402,
            'colonia'=>'Col. Partido Romero',
            'cp'=>32584,
            'telefono'=>'656 688 4843',
            'ext'=>4817,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>2,
            'nombre'=>'Instituto de Arquitectura, Diseño y Arte',
            'iniciales'=>'IADA',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av del Charro',
            'numero'=>450,
            'colonia'=>'Col. Partido Romero',
            'cp'=>32584,
            'telefono'=>'656 688 4820',
            'ext'=>4923,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>3,
            'nombre'=>'Instituto de Ciencias Biomédicas',
            'iniciales'=>'ICB',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av. Benjamín Franklin',
            'numero'=>4650,
            'colonia'=>'Zona PRONAF',
            'cp'=>32310,
            'telefono'=>'656 688 1800',
            'ext'=>1687,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>4,
            'nombre'=>'Instituto de Ciencias Sociales y Administración',
            'iniciales'=>'ICSA',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>' Av. Universidad',
            'colonia'=>'Zona Chamizal',
            'cp'=>32300,
            'telefono'=>'656 688 3800',
            'ext'=>3820,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus_uacj')->insert([
            'id'=>5,
            'nombre'=>'Nuevo Casas Grandes',
            'iniciales'=>'NCG',
            'estado'=>'Chihuahua',
            'ciudad'=>'Nuevo Casas Grandes',
            'calle'=>'Av. Universidad',
            'numero'=>3003,
            'colonia'=>'Ejido Hidalgo',
            'cp'=>31803,
            'telefono'=>'636 692 9800',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

    }
}
