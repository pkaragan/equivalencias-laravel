<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class UniversidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universidad')->insert([
            'nombre'=>'Instituto Tecnológico de Ciudad Juárez',
            'iniciales'=>'ITCJ',
            'tipo'=>'publica',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Universidad Pedagógica Nacional',
            'iniciales'=>'UPN',
            'tipo'=>'publica',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Universidad Tecnológica de Ciudad Juárez',
            'iniciales'=>'UTCJ',
            'tipo'=>'publica',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Universidad TecMilenio',
            'iniciales'=>'UTM',
            'tipo'=>'privada',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Tecnológico de Monterrey',
            'iniciales'=>'ITESM',
            'tipo'=>'privada',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
