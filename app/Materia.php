<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = "materia";
    public function carrera()
    {
        return $this->belongsTo(Carrera::class)->withTimestamps();
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class)->withTimestamps();
    }

    public function equivalencias()
    {
        return $this->belongsToMany(MateriaUacj::class, 'equivalencias');
    }
}
