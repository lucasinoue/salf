<?php

namespace Salf\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Incidencia extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
    	'descricao'
    ];

}
