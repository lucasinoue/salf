<?php

namespace Salf\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Reserva extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'user_id',
        'motivo_id',
        'data',
        'sala_id',
        'horario_id'
    ];

}
