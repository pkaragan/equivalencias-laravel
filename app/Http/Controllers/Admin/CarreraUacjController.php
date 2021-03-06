<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Quotation;
use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarCarreraUacj;
use App\Models\Admin\CampusUacj;
use App\Models\Admin\Carrera;
use App\Models\Admin\CarreraUacj;
use Illuminate\Http\Request;

class CarreraUacjController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carrera-uacj.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarCarreraUacj $request)
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
        $carreras=CarreraUacj::where('campus_uacj_id',"=",$id)->get();
        $carrera=CarreraUacj::findOrFail($id);
        return view('admin.carrera-uacj.index', compact('carreras', 'carrera'));      
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
    public function destroy($id)
    {
        //
    }
}
