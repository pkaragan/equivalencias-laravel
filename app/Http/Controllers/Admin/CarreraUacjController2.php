<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CarreraUacj;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarCarreraUacj;
use App\Models\Admin\CampusUacj;

class CarreraUacjController extends Controller
{
    public function index($id)
    {
        $carreras = CarreraUacj::orderBy('id')->get();

        //$campus = CarreraUacj::campusUacj($id);
        
        return view('admin.carrera-uacj.index', compact('carreras'));        
    }

    public function crear()
    {
        return view('admin.carrera-uacj.crear');
    }

    public function guardar(ValidarCarreraUacj $request)
    {
        CarreraUacj::create($request->all());
        return redirect('admin/carrera-uacj/crear')->with('mensaje', 'Carrera creada con exito');
    }

    public function mostrar($id)
    {
        //
    }

    public function editar($id)
    {
        $data = CarreraUacj::findOrFail($id);
        return view('admin.carrera-uacj.editar', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(ValidarCarreraUacj $request, $id)
    {
        CarreraUacj::findOrFail($id)->update($request->all());
        return redirect('admin/CarreraUacj')->with('mensaje', 'Carrera actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar(Request $request, $id)
    {
        if ($request->ajax()) {
            if (CarreraUacj::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
