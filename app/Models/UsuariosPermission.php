<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosPermission extends Model
{
    protected $table = 'users_permissions';

    public function roles()
    {
        //return $this->belongsTo('App\UsuariosRoles');
        return $this->belongsToMany(UsuariosRoles::class, 'role_user');
    }
}