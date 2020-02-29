<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    public $table = "carrera";
    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }

    public function materias()
    {
        return $this->hasMany(Materia::class);
    }    

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }    

  /*  public function universidad()
    {
        return $this->hasOneThrough(Universidad::class, Campus::class);
    }*/
}
