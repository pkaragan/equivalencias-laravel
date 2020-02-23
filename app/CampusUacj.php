<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampusUacj extends Model
{
    public function carreras()
    {
        return $this->hasMany(CarreraUacj::class);
    }
}
