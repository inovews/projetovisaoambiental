<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PortalAlunoProf extends Model
{
    protected $table = 'portalalunoprof';

    protected $casts = [
        'extra' => 'json',
    ];

    public function author()
    {
        //return $this->belongsTo(User::class, 'author_id');
    }

    public function faculdades()
    {
    	//return $this->belongsTo(Faculdade::class, 'faculdade_id');
        return $this->hasMany(Faculdade::class,'id','faculdade_id');
    }

    public function cursos()
    {
        return $this->hasMany(FaculdadeCurso::class,'id','curso_id');
    }

    public function scopeHot($query)
    {
        return $query->where('rate', '>', 1);
    }

    public function scopeReleased($query)
    {
        return $query->where('released', 1);
    }

    public function scopeUnreleased($query)
    {
        return $query->where('released', 0);
    }
}
