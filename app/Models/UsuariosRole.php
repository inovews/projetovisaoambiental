<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use UsuariosRoleUsers;
use UsuariosPermission;

class UsuariosRole extends Model
{
    protected $table = 'users_roles';

    protected $fillable = ['name', 'slug'];

    public function users()
    {
        return $this->belongsToMany(UsuariosRoleUsers::class, 'role_id', 'user_id');
    }

    public function permissions()
    {
        return $this->belongsToMany(UsuariosPermission::class, 'role_id', 'user_id');
    }

}
