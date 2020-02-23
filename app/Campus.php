<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    public function universidad()
    {
        return $this->belongsTo(Universidad::class);
    }

    public function carreras()
    {
        return $this->hasMany(Carrera::class);
    }
}
