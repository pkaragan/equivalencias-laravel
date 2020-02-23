<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function carrera()
    {
        return $this->belongsTo(Carrera::class)->withTimestamps();
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class)->withTimestamps();
    }
}
