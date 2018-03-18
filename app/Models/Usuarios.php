<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Auth\Authenticatable;
use Encore\Admin\Auth\Database\HasPermissions;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Usuarios extends Model implements AuthenticatableContract
{
    use Authenticatable, AdminBuilder, HasPermissions;

    protected $table = 'users';

    protected $fillable = ['username', 'password', 'name'];


}
