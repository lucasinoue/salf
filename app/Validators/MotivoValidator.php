<?php

namespace Salf\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class MotivoValidator extends LaravelValidator {

    protected $rules = [
        'descricao' => 'required|max:255'
   ];

}