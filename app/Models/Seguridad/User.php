<?php

namespace App\Models\Seguridad;

use App\Models\Admin\TipoUser;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table='user';
    protected $remember_token= false;
    protected $fillable = ['tipo_user_id', 'usuario', 'nombre', 'apellido', 'password', 'telefono', 'direccion', 'fecha_nac', 'estado'];
    protected $guarded = ['id'];

    public function tipo_user()
    {
        return $this->belongsTo(TipoUser::class);
    }

    public function setSession($user)
    {
        if ($user['tipo_user_id']==1) {
            Session::put(
                [
                    'tipo_user_id' => $user->tipo_user->id,
                    'tipo_user_nombre' => $user->tipo_user->nombre,
                    'usuario' => $this->usuario,
                    'usuario_id' => $this->id,
                    'nombre_usuario' => $this->nombre,
                    'apellido_usuario' => $this->apellido,
                    'nombre_completo' => $this->nombre.' '.$this->apellido
                ]
            );
        }
    }
}