<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarreraUacj extends Model
{
    public $table = "carrera_uacj";
    public function campus()
    {
        return $this->belongsTo(CampusUacj::class)->withTimestamps();
    } 

    public function materias()
    {
        return $this->hasMany(MateriaUacj::class);
    }
}
