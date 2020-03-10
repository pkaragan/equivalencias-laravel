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
        $materias = Materia::join('materia_plan_carrera', 'materia.id', '=', 'materia_plan_carrera.materia_id')
                ->select('materia.clave', 'materia.nombre', 'materia.id as DT_RowId')
                ->where('materia_plan_carrera.plan_carrera_id', $plan)
                ->get();


        return $materias;
    }
}
