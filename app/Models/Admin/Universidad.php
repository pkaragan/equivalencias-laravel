<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    public $table = "universidad";
    public function campus()
    {
        return $this->hasMany(Campus::class);
    }

    public function carreras()
    {
        return $this->hasManyThrough(Carrera::class, Campus::class);
    }

    public function alumnos()
    {
        return $this->hasManyThrough(Alumno::class, Carrera::class);
    }
}
