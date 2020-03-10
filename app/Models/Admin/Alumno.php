<?php

namespace App\Models\Admin;

use App\Models\Seguridad\User;
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

    public function user()
    {
        return $this->hasOneThrough(User::class, TipoUser::class)->withTimeStamps();
    }
}