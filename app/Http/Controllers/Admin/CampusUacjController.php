<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Admin\CampusUacj;
use App\Http\Requests\ValidarCampusUacj;
use Illuminate\Http\Request;

class CampusUacjController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campus = CampusUacj::orderBy('id')->get();
        return view('admin.uacj.index', compact('campus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.uacj.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarCampusUacj $request)
    {
        CampusUacj::create($request->all());
        return redirect()->route('uacj.index')->with('mensaje', 'Campus creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CampusUacj  $campusUacj
     * @return \Illuminate\Http\Response
     */
    public function show(CampusUacj $campusUacj)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CampusUacj  $campusUacj
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campus = CampusUacj::findOrFail($id);
        return view('admin.uacj.edit', compact('campus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CampusUacj  $campusUacj
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarCampusUacj $request, $id)
    {      
        CampusUacj::findOrFail($id)->update($request->all());

        return redirect()->route('uacj.index')->with('mensaje', 'Campus actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CampusUacj  $campusUacj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->ajax()) {               
            if (CampusUacj::destroy($id)) {     
                return response()->json(['mensaje' => 'ok']);                
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }
}
