<?php

namespace App\Models\Admin;

use App\Models\Seguridad\User;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = "admin";
    public function user()
    {
        return $this->belongsTo(User::class)->withTimeStamps();
    }
}
