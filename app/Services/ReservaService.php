<?php 


namespace Salf\Services;

use Salf\Repositories\ReservaRepository;
use Salf\Validators\ReservaValidator;
use Prettus\Validator\Exceptions\ValidatorException;


/**
* 
*/
class ReservaService
{
	
	protected $repository;
	protected $validator;

	public function __construct(ReservaRepository $repository, ReservaValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}


	public function find($id)
	{
		try {
			return $this->repository->find($id);		
		} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return ['error'=>true, 'Reserva não encontrado.'];
        }
	}

	public function create(array $data)
	{

		try {
			$this->validator->with($data)->passesOrFail();
		
			return $this->repository->create($data);
		} catch (ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
	}

	public function update(array $data, $id)
	{

		try {
			$this->validator->with($data)->passesOrFail();
			return $this->repository->update($data, $id);
		}
	 	catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return ['error'=>true, 'Reserva não encontrada.'];
        }catch (ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
         catch (\Exception $e) {
             return ['error'=>true, 'Ocorreu algum erro ao alterar a reserva.'];
        }  
	}

	public function delete($id) {
		try {
			$this->repository->find($id)->delete();
			return ['success'=>true, 'Reserva deletada com sucesso.'];			
		}catch (\Illuminate\Database\QueryException $e) {
			return ['error'=>true, 'Reserva não pode ser apagada pois existem usuários vinculados a ele.'];
		}
	 	catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return ['error'=>true, 'Reserva não encontrado.'];
        } catch (\Exception $e) {
             return ['error'=>true, 'Ocorreu algum erro ao excluir o reserva.'];
        }
	}

} 