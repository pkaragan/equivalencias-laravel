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
            'tipo'=>'Publica',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Universidad Pedagógica Nacional',
            'iniciales'=>'UPN',
            'tipo'=>'Pública',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Universidad Tecnológica de Ciudad Juárez',
            'iniciales'=>'UTCJ',
            'tipo'=>'Pública',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Universidad TecMilenio',
            'iniciales'=>'UTM',
            'tipo'=>'Privada',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('universidad')->insert([
            'nombre'=>'Tecnológico de Monterrey',
            'iniciales'=>'ITESM',
            'tipo'=>'Privada',
            'pais'=>'México',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
