<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarCarrera;
use App\Models\Admin\Carrera;
use App\Models\Admin\Materia;
use App\Models\Admin\PlanCarrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MateriaController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.materia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Materia::create($request->all());
        return redirect()->route('materia.show',$request['carrera_id'])->with('mensaje', 'Materia creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrera = Carrera::findOrFail($id);
        $planes = PlanCarrera::where('carrera_id', $carrera->id)->get();

        return view('admin.materia.index', compact('carrera', 'planes'));

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarCarrera $request)
    {
        $materia=Materia::findOrFail($request->id);
        $materia->update($request->all());
        return redirect()->route('materia.show',$request['carrera_id'])->with('mensaje', 'Materia actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {

            if (Materia::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            }else{
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
    
}
