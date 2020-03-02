<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campus')->insert([
            'nombre'=>'CAMPUS I',
            'iniciales'=>'C1',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av. Tecnológico',
            'numero'=>1340,
            'colonia'=>'Fracc. El Crucero',
            'cp'=>32500,
            'telefono'=>'656 688 2500',
            'ext'=>'2001',
            'universidad_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus')->insert([
            'nombre'=>'CAMPUS II',
            'iniciales'=>'C2',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av. José De Jesús Macías Delgado',
            'colonia'=>'Ciudad del Conocimiento',
            'telefono'=>'656 688 2500',
            'universidad_id'=>1,
            'ext'=>'2500',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus')->insert([
            'nombre'=>'CAMPUS JUÁREZ',
            'iniciales'=>'CJ',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Calle Camino Viejo a San José',
            'numero'=>8370,
            'colonia'=>'Floresta de San José',
            'cp'=>32534,
            'telefono'=>'656 617 8891',
            'universidad_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus')->insert([
            'nombre'=>'Ciudad Juárez',
            'iniciales'=>'CJ',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av. Universidad Tecnológica',
            'numero'=>3051,
            'colonia'=>'Col. Lote Bravo',
            'cp'=>32695,
            'telefono'=>'656 649 0600',
            'universidad_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus')->insert([
            'nombre'=>'CAMPUS CIUDAD JUÁREZ',
            'iniciales'=>'CCJ',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Av. Francisco Villarreal',
            'numero'=>11163,
            'colonia'=>'Col. Partido Senecú',
            'cp'=>32551,
            'telefono'=>'656 227 5600',
            'universidad_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('campus')->insert([
            'nombre'=>'CAMPUS CIUDAD JUÁREZ',
            'iniciales'=>'CCJ',
            'estado'=>'Chihuahua',
            'ciudad'=>'Ciudad Juárez',
            'calle'=>'Blvd. Tomás Fernández Campos',
            'numero'=>8945,
            'colonia'=>'Parque Industrial Antonio J. Bermúdez',
            'cp'=>32470,
            'telefono'=>'656 629 9100',
            'universidad_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
