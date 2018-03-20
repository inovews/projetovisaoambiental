<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FaculdadeCurso extends Model
{
	protected $table = 'faculdade_curso';

	public function getOptionsAttribute($options)
	{
		if (is_string($options)) {
			$options = explode(',', $options);
		}

		return $options;
	}

	public function setOptionsAttribute($options)
	{
		if (is_array($options)) {
			$options = join(',', $options);
		}

		$this->options = $options;
	}
}
