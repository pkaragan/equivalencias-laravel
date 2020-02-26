<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    protected $table = "universidad";
    protected $fillable = ['nombre', 'telefono', 'direccion', 'iniciales', 'tipo', 'pais', 'estado', 'ciudad'];
    protected $guarded = ['id'];

    public function campus()
    {
        return $this->hasMany(Campus::class);
    }

    public function carreras()
    {
        return $this->hasManyThrough(Carrera::class, Campus::class);
    }

    public function alumnos()
    {
        return $this->hasManyThrough(Alumno::class, Carrera::class);
    }        
    
}
