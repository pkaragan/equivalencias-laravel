<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PlanCarrera extends Model
{
    public $table = "plan_carrera";
    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

    public function materias()
    {
        return $this->belongsToMany(Materia::class);
    }
}
