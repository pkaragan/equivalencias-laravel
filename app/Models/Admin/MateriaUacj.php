<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MateriaUacj extends Model
{
    public $table = "materia_uacj";
    public function plan()
    {
        return $this->belongsToMany(PlanCarreraUacj::class, 'materia_plan_uacj', 'materia_id', 'plan_id');
    }
    
    public function carrera()
    {
        return $this->hasManyThrough(CarreraUacj::class, PlanCarreraUacj::class);
    }

    public function equivalencias()
    {
        return $this->belongsToMany(Materia::class, 'equivalencias');
    }
}
