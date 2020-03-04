<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarCampus;
use App\Models\Admin\Campus;
use App\Models\Admin\Universidad;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $universidad = new Universidad;
        $universidades = $universidad
        ->select('universidad.id as id', 'universidad.nombre as nombre', 'universidad.iniciales as iniciales', 'campus.nombre as campus', 'campus.id as campus_id')
        ->join('campus','universidad.id','=','campus.universidad_id')
        ->get();

        return view('admin.campus.index', compact('universidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $universidades = Universidad::orderBy('id')->get();
        return view('admin.campus.create', compact('universidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarCampus $request)
    {
        if($request['radio-universidad']=='existente'){
            Campus::create([
                'nombre'=>$request['nombre'],
                'iniciales'=>$request['iniciales'],
                'estado'=>$request['estado'],
                'ciudad'=>$request['ciudad'],
                'calle'=>$request['calle'],
                'numero'=>$request['numero'],
                'numero_int'=>$request['numero_int'],
                'colonia'=>$request['colonia'],
                'cp'=>$request['cp'],
                'telefono'=>$request['telefono'],
                'ext'=>$request['ext'],
                'universidad_id'=>$request['select-uni']
            ]);
        }else{
            $universidad = Universidad::create([
                'nombre'=>$request['uni-nombre'],
                'iniciales'=>$request['uni-iniciales'],
                'tipo'=>$request['uni-tipo'],
                'pais'=>$request['uni-pais'],
            ]);
            
            Campus::create([
                'nombre'=>$request['nombre'],
                'iniciales'=>$request['iniciales'],
                'estado'=>$request['estado'],
                'ciudad'=>$request['ciudad'],
                'calle'=>$request['calle'],
                'numero'=>$request['numero'],
                'numero_int'=>$request['numero_int'],
                'colonia'=>$request['colonia'],
                'cp'=>$request['cp'],
                'telefono'=>$request['telefono'],
                'ext'=>$request['ext'],
                'universidad_id'=>$universidad->id
            ]);
        }        

        return redirect('admin/campus/')->with('mensaje', 'Campus creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function show(Campus $campus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campus = Campus::with('universidad')->findOrFail($id);
        return view('admin.campus.edit', compact('campus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarCampus $request, $id)
    {
        if($request['edit']=='edit'){
            Campus::findOrFail($id)->update([
                'nombre'=>$request['nombre'],
                'iniciales'=>$request['iniciales'],
                'estado'=>$request['estado'],
                'ciudad'=>$request['ciudad'],
                'calle'=>$request['calle'],
                'numero'=>$request['numero'],
                'numero_int'=>$request['numero_int'],
                'colonia'=>$request['colonia'],
                'cp'=>$request['cp'],
                'telefono'=>$request['telefono'],
                'ext'=>$request['ext'],
            ]);        
        }        

        return redirect('admin/campus')->with('mensaje', 'Campus actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campus  $campus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {                        
        if ($request->ajax()) {               
            $campus=Campus::findOrFail($id);
            $hayMasCampus=Campus::where('universidad_id','=',$campus->universidad_id)->count();
            if (Campus::destroy($id)) {     
                if($hayMasCampus==1)
                {
                    if(Universidad::destroy($campus->universidad_id)){
                        return response()->json(['mensaje' => 'ok']);
                    }else{
                        return response()->json(['mensaje' => 'ng']);
                    }
                }else{
                    return response()->json(['mensaje' => 'ok']);
                }
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
