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
        return $this->belongsTo(User::class, 'author_id');
    }

    public function faculdades()
    {
        return $this->morphToMany(Faculdade::class, 'portalalunoprof', 'portalalunoprof_taggables');
    }

    public function cursos()
    {
        return $this->morphToMany(FaculdadeCurso::class,'portalalunoprof','portalalunoprof_taggables');
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
