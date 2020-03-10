<?php

namespace App\Models\Admin;

use App\Models\Seguridad\User;
use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model
{
    public $table = "tipo_user";
    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
    public function alumnos()
    {
        return $this->hasMany(Alumno::class);
    }
}
