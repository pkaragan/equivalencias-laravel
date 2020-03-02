<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    public $table = "campus";
    protected $fillable = ['nombre', 'iniciales', 'estado', 'ciudad', 'calle', 'numero', 'numero-int', 'colonia', 'cp', 'telefono', 'ext', 'universidad_id'];
    protected $guarded = ['id'];
    public function universidad()
    {
        return $this->belongsTo(Universidad::class);
    }

    public function carreras()
    {
        return $this->hasMany(Carrera::class);
    }
}
