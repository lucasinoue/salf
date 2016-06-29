<?php

namespace Salf\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator {

    protected $rules = [
    	'name' => 'required|max:255',
    	'email' => 'required|max:255',
    	'password' => 'required',
    	'id_departamento' => 'required'
   ];
}