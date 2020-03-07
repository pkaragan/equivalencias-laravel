<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PlanCarreraUacj extends Model
{
    public $table = "plan_carrera_uacj";
    public function carreraUacj()
    {
        return $this->belongsTo(CarreraUacj::class);
    } 

    public function materias()
    {
        return $this->hasMany(MateriaUacj::class);
    }
}
