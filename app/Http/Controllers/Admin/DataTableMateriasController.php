<?php

namespace App\Http\Controllers;

use App\Models\Admin\Carrera;
use App\Models\Admin\Materia;
use App\Models\Admin\PlanCarrera;
use Illuminate\Http\Request;

class DataTableMateriasController extends Controller
{
    public function index(){

    }

    public function fetch(Request $request)
    {
        $plan = $request->get('plan');
        $materias = Materia::join('materia_plan', 'materia.id', '=', 'materia_plan.materia_id')
                ->select('materia.clave', 'materia.nombre', 'materia.id')
                ->where('materia_plan.plan_id', $plan)
                ->get();


        return $materias->toJs
    }
}
