<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class CampusUacj extends Model
{    
    public $table = "campus_uacj";
    protected $fillable = ['nombre', 'iniciales', 'estado', 'ciudad', 'calle', 'numero', 'cp'];
    protected $guarded = ['id'];
    public function carreras()
    {
        return $this->hasMany(CarreraUacj::class);
    }
}
