<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Carrera;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarCarrera;

class CarreraController extends Controller
{
    public function index()
    {
        $carrera = Carrera::orderBy('id')->get();
        return view('admin.carrera.index', compact('carrera'));
    }

    public function crear()
    {
        return view('admin.carrera.crear');
    }

    public function guardar(ValidarCarrera $request)
    {
        Carrera::create($request->all());
        return redirect('admin/carrera/crear')->with('mensaje', 'Carrera creado con exito');
    }

    public function mostrar($id)
    {
        //
    }

    public function editar($id)
    {
        $data = Carrera::findOrFail($id);
        return view('admin.carrera.editar', compact('data'));
    }

    public function actualizar(ValidarCarrera $request, $id)
    {
        Carrera::findOrFail($id)->update($request->all());
        return redirect('admin/carrera')->with('mensaje', 'Carrera actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Carrera::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
