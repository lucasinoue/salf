<?php

namespace Salf\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class ReservaValidator extends LaravelValidator {

    protected $rules = [
        
    	'user_id' => 'required|exists:users,id',
        'motivo_id' => 'required|exists:motivos,id',
        'data' => 'required',
        'sala_id' => 'required|exists:salas,id',
        'horario_id' => 'required|exists:horarios,id'

   ];


    protected $messages = [

    	'user_id.required' => 'Usuario é obrigatorio.',
    	'motivo_id.required' => 'Motivo é obrigatorio.',
    	'data.required' => 'Data é obrigatoria.',
    	'sala_id.required' => 'Sala é obrigatoria.',
    	'horario_id.required' => 'Horario é obrigatorio.',

    	'user_id.exists' => 'Usuario não existe.',
    	'motivo_id.exists' => 'Usuario não existe.',
    	'sala_id.exists' => 'Usuario não existe.',
    	'horario_id.exists' => 'Horario  não existe.'
    ];

}