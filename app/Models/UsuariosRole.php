<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsuariosRole extends Model
{
    protected $table = 'users_roles';

    public function users()
    {
        //return $this->belongsToMany(config('auth.providers.users.model', config('auth.model')))->withTimestamps();
        //return $this->belongsTo('App\User');
        return $this->belongsToMany(User::class, 'role_user');
    }

    public function permissions()
    {
    	//return $this->belongsTo('App\UsuariosPermissions');
    	return $this->belongsToMany(UsuariosPermissions::class, 'role_user');
    }
}
