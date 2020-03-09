<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Materia;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function dataTableMaterias(Request $request)
    {
        $plan = $request->get('plan');
        $materias = Materia::join('materia_plan', 'materia.id', '=', 'materia_plan.materia_id')
                ->select('materia.clave', 'materia.nombre', 'materia.id')
                ->where('materia_plan.plan_id', $plan)
                ->get();


        return $materias;
    }
}
