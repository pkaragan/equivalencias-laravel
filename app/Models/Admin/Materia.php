<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = "materia";
    protected $fillable = ['nombre', 'clave', 'carrera_id'];
    protected $guarded = ['id'];

    public function planesCarrera()
    {
        return $this->belongsToMany(PlanCarrera::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_materias');
    }

    public function equivalencias()
    {
        return $this->belongsToMany(MateriaUacj::class, 'equivalencias');
    }

}
