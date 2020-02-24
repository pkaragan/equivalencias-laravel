<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CampusUacj extends Model
{
    public $table = "campus_uacj";
    public function carreras()
    {
        return $this->hasMany(CarreraUacj::class);
    }
}
