<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{   
    public function materia()
    {
        return $this->hasMany(Materia::class)->withTimestamps();
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class)->withTimestamps();
    }        
}