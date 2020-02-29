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
        return redirect('admin/uacj/create')->with('mensaje', 'Campus creado con exito');
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
    public function edit(CampusUacj $campusUacj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CampusUacj  $campusUacj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CampusUacj $campusUacj)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CampusUacj  $campusUacj
     * @return \Illuminate\Http\Response
     */
    public function destroy(CampusUacj $campusUacj)
    {
        //
    }
}
