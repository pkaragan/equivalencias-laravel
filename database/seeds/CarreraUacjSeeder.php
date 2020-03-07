<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CarreraUacjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //IIT
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Aeronáutica',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Ambiental',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Biomédica',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Civil',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Eléctrica',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Física',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Geociencias',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Industrial y de Sistemas',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Mecánica',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Matemáticas',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Materiales',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Manufactura',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Mecatrónica',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Sistemas Computacionales',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Sistemas Digitales y Comunicaciones',
            'campus_uacj_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        //Ciudad Universitaria
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Mecatrónica',
            'campus_uacj_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Sistemas Computacionales',
            'campus_uacj_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería Industrial y de Sistemas',
            'campus_uacj_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Sistemas Automotrices',
            'campus_uacj_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería de Software',
            'campus_uacj_id'=>6,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        //Nuevo Casas Grandes
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Agronegocios',
            'campus_uacj_id'=>5,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        //Cuauhtemoc
        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Diseño y Automatización Agrícola',
            'campus_uacj_id'=>7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('carrera_uacj')->insert([            
            'nombre'=>'Ingeniería en Diseño y Automatización Alimentaria',
            'campus_uacj_id'=>7,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}