<?php

namespace Salf\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class DepartamentoValidator extends LaravelValidator {

    protected $rules = [
    	'descricao' => 'required|max:255'
    ];

}