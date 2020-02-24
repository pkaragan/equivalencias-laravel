<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{   
    public $table = "alumno";
    public function materia()
    {
        return $this->hasMany(Materia::class)->withTimestamps();
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class)->withTimestamps();
    }        
}