<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaUacj extends Model
{
    public function carrera()
    {
        return $this->belongsTo(CarreraUacj::class)->withTimestamps();
    }

    public function campus()
    {
        return $this->hasOneThrough(CampusUacj::class, CarreraUacj::class);
    }
}
