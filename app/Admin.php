<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public $table = "admin";
    public function user()
    {
        return $this->belongsTo(User::class)->withTimeStamps();
    }
}
