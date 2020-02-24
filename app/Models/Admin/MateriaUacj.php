<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class MateriaUacj extends Model
{
    public $table = "materia_uacj";
    public function carrera()
    {
        return $this->belongsTo(CarreraUacj::class)->withTimestamps();
    }

    public function campus()
    {
        return $this->hasOneThrough(CampusUacj::class, CarreraUacj::class);
    }

    public function equivalencias()
    {
        return $this->belongsToMany(Materia::class, 'equivalencias');
    }
}
