<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = "materia";
    protected $fillable = ['nombre', 'carrera_id'];
    protected $guarded = ['id'];

    public function plan()
    {
        return $this->belongsToMany(PlanCarrera::class, 'materia_plan');
    }

    public function carrera()
    {
        return $this->hasManyThrough(Carrera::class, PlanCarrera::class);
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
