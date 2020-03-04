<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidarUniversidad;
use App\Models\Admin\Universidad;
use Illuminate\Http\Request;

class UniversidadController extends Controller
{
    
    public function edit($id)
    {
        $universidad = Universidad::findOrFail($id);
        return view('admin.universidad.edit', compact('universidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarUniversidad $request, $id)
    {
        Universidad::findOrFail($id)->update($request->all());
        return redirect('admin/campus')->with('mensaje', 'Universidad actualizada con exito');
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
