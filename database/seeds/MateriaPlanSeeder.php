<?php

use App\Models\Admin\Materia;
use App\Models\Admin\MateriaPlan;
use App\Models\Admin\PlanCarrera;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class MateriaPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $materia=Materia::orderBy('id')->get();
        $plan=PlanCarrera::orderBy('id')->pluck('id')->toArray();
        foreach($materia as $key){
            DB::table('materia_plan')->insert([
                'materia_id'=>$key['id'],
                'plan_id'=>$faker->randomElement($plan),
            ]);
        }
    }
}
