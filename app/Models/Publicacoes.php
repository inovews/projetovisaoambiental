<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Publicacoes extends Model
{
    use SortableTrait;

    protected $table = 'publicacoes';

    public $sortable = [
        'order_column_name' => 'order',
        'sort_when_creating' => true,
    ];

    public static function grid($callback)
    {
        return new Grid(new static, $callback);
    }

    public static function form($callback)
    {
        return new Form(new static, $callback);
    }
}
