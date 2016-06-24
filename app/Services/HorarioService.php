<?php 


namespace Salf\Services;

use Salf\Repositories\HorarioRepository;
use Prettus\Validator\Exceptions\ValidatorException;


/**
* 
*/
class HorarioService
{
	
	protected $repository;

	public function __construct(HorarioRepository $repository)
	{
		$this->repository = $repository;
		
	}


	public function find($id)
	{
		try {
			return $this->repository->find($id);		
		} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return ['error'=>true, 'Horario não encontrado.'];
        }
	}
} 