<?php

use App\Models\Admin\Carrera;
use App\Models\Admin\PlanCarrera;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PlanCarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {                
        $carrera=Carrera::orderBy('id')->get();
        foreach($carrera as $key){
            PlanCarrera::create([
                'carrera_id'=>$key['id'],
                'clave'=>'2020',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
