<?php

namespace Salf\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Reserva extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [
        'id_usuario',
        'id_motivo',
        'data',
        'id_sala',
        'id_horario'
    ];

}
