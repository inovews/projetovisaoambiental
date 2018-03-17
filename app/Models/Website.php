<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
	/**
     * Get the Banner many to many
     */
    public function banners()
    {
        return $this->belongsToMany(Banner::class)->active()->orderBy('created_at', 'DESC');
    }
}
