<?php

use App\Models\Admin\CarreraUacj;
use App\Models\Admin\PlanCarreraUacj;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PlanCarreraUacjSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carrera=CarreraUacj::orderBy('id')->get();
        foreach($carrera as $key){
            PlanCarreraUacj::create([
                'carrera_uacj_id'=>$key['id'],
                'clave'=>'2020',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
