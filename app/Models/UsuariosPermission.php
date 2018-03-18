<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use UsuariosRole;

class UsuariosPermission extends Model
{
    protected $table = 'users_permissions';

    public function roles()
    {
        return $this->belongsToMany(UsuariosRoles::class, 'role_user');
    }
    
}