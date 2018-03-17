<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Titan\Models\TitanCMSModel;
use Titan\Models\Traits\ActiveTrait;
use Titan\Models\Traits\ImageThumb;

class Banner extends Model
{

	use SoftDeletes, ActiveTrait, ImageThumb;

	protected $table = 'banners';

	protected $guarded = ['id'];

	protected $dates = ['active_form', 'active_to'];

	/**
     * Get all the rows as an array (ready for dropdowns)
     *
     * @return array
     */
	public static function getAllList()
	{
		return self::active()->orderBy('name')->get()->pluck('name', 'id')->toArray();
	}

}
