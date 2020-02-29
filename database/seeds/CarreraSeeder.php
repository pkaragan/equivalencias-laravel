<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tec de Juarez
        DB::table('carrera')->insert([            
            'nombre'=>'Licenciatura en Administración de Empresas',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Licenciatura en Administración Pública',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Licenciatura en Contaduría',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería Mecatrónica',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería Electromecánica',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería Eléctrica',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería Mecánica',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería en Sistemas Computacionales',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería Electrónica',
            'campus_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //Tec de Juarez - ciudad universitaria
        DB::table('carrera')->insert([            
            'nombre'=>'Licenciatura en Administración',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Contador Público',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería en Tecnologías de la Información y Comunicaciones',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería en Sistemas Computacionales',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería Industrial',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería en Logística',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniería en Gestión Empresarial',
            'campus_id'=>2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //UPN Ciudad Juarez        
        DB::table('carrera')->insert([            
            'nombre'=>'LICENCIATURA EN INTERVENCIÓN EDUCATIVA',
            'campus_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'LICENCIATURA EN PEDAGOGÍA',
            'campus_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'LICENCIATURA EN EDUCACIÓN PREESCOLAR PARA EL MEDIO INDÍGENA',
            'campus_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'LICENCIATURA EN EDUCACIÓN PRIMARIA PARA EL MEDIO INDÍGENA',
            'campus_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'LICENCIATURA EN EDUCACIÓN Y DESARROLLO COMUNITARIO',
            'campus_id'=>3,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //UTCJ
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Energías Renovables',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Logística Internacional',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Mantenimiento Industrial ',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Mecatrónica ',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Nanotecnología ',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Lic. en Innovación de Negocios y Mercadotécnia',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Procesos y Operaciones Industriales',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. en Tecnologías de la Información',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ing. Financiera y Fiscal',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Lic. en Protección Civil',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Lic. en Terapia Física',
            'campus_id'=>4,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        //TEC MILENIO
        DB::table('carrera')->insert([            
            'nombre'=>'Comercio Internacional',
            'campus_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Diseño Gráfico y Animación',
            'campus_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Industrial',
            'campus_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Mecatrónica',
            'campus_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Mercadotecnia',
            'campus_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
            //TEC DE MONTERREY
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero Biomédico',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero Civil entrando por Ambiente Construido',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero Civil entrando por Ingeniería-Innovación y Transformación',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Alimentos',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Biosistemas Agroalimentarios',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Biotecnología',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Ciencia de Datos y Matemáticas',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Desarrollo Sustentable',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Electrónica',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Innovación y Desarrollo',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Mecatrónica',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Nanotecnología',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Robótica y Sistemas Digitales',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Tecnologías Computacionales',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera')->insert([            
            'nombre'=>'Ingeniero en Transformación Digital de Negocios',
            'campus_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
