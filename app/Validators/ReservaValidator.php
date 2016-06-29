<?php

namespace Salf\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ReservaValidator extends LaravelValidator {

    protected $rules = [
        
    	'id_usuario' => 'required|exists:users,id',
        'id_motivo' => 'required|exists:motivos,id',
        'data' => 'required',
        'id_sala' => 'required|exists:salas,id',
        'id_horario' => 'required|exists:horarios,id'

   ];


    protected $messages = [

    	'id_usuario.required' => 'Usuario é obrigatorio.',
    	'id_motivo.required' => 'Motivo é obrigatorio.',
    	'data.required' => 'Data é obrigatoria.',
    	'id_sala.required' => 'Sala é obrigatoria.',
    	'id_horario.required' => 'Horario é obrigatorio.',

    	'id_usuario.exists' => 'Usuario não existe.',
    	'id_motivo.exists' => 'Usuario não existe.',
    	'id_sala.exists' => 'Usuario não existe.',
    	'id_horario.exists' => 'Horario  não existe.'
    ];

}