<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Rol;

class User extends Model
{
    protected $fillable = ['user_name', 'user_email', 'user_phone', 'user_password', 'rol_id'];
    protected $primaryKey = 'user_id';

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}
