<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarCarrera;
use App\Models\Admin\Campus;
use App\Models\Admin\Carrera;
use App\Models\Admin\Universidad;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carrera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarCarrera $request)
    {
        Carrera::create($request->all());
        return redirect()->route('carrera.show',$request['campus_id'])->with('mensaje', 'Carrera creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campus = Campus::findOrFail($id);

        $carreras=Carrera::where('campus_id',"=",$id)->get();

        $universidad = Universidad::findOrFail($campus->universidad_id);
        return view('admin.carrera.index', compact('carreras', 'campus', 'universidad'));      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
              
            if (Carrera::destroy($id)) {     
                return response()->json(['mensaje' => 'ok']);         
            }else{
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}