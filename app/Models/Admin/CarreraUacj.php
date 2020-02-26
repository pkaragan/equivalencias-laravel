<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CarreraUacj extends Model
{
    public $table = "carrera_uacj";
    public function campusUacj()
    {
        return $this->belongsTo(CampusUacj::class);
    } 

    public function materias()
    {
        return $this->hasMany(MateriaUacj::class);
    }
}
