<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoUser extends Model
{
    public $table = "tipo_user";
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
