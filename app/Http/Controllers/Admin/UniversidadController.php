<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Universidad;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarUniversidad;

class UniversidadController extends Controller
{
    public function index()
    {
        $universidad = Universidad::orderBy('id')->get();
        return view('admin.universidad.index', compact('universidad'));
    }

    public function crear()
    {
        return view('admin.universidad.crear');
    }

    public function guardar(ValidarUniversidad $request)
    {
        Universidad::create($request->all());
        return redirect('admin/universidad/crear')->with('mensaje', 'Universidad creado con exito');
    }

    public function mostrar($id)
    {
        //
    }

    public function editar($id)
    {
        $data = Universidad::findOrFail($id);
        return view('admin.universidad.editar', compact('data'));
    }

    public function actualizar(ValidarUniversidad $request, $id)
    {
        Universidad::findOrFail($id)->update($request->all());
        return redirect('admin/universidad')->with('mensaje', 'Universidad actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        if ($request->ajax()) {
            if (Universidad::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
