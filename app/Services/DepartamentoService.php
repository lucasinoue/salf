<?php 


namespace Salf\Services;

use Salf\Repositories\DepartamentoRepository;
use Salf\Validators\DepartamentoValidator;
use Prettus\Validator\Exceptions\ValidatorException;


/**
* 
*/
class DepartamentoService
{
	
	protected $repository;
	protected $validator;

	public function __construct(DepartamentoRepository $repository, DepartamentoValidator $validator)
	{
		$this->repository = $repository;
		$this->validator = $validator;
	}


	public function find($id)
	{
		try {
			return $this->repository->find($id);		
		} catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return ['error'=>true, 'Departamento não encontrado.'];
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
            return ['error'=>true, 'Departamento não encontrado.'];
        }catch (ValidatorException $e) {
			return [
				'error' => true,
				'message' => $e->getMessageBag()
			];
		}
         catch (\Exception $e) {
             return ['error'=>true, 'Ocorreu algum erro ao alterar o departamento.'];
        }  
	}

	public function delete($id) {
		try {
			$this->repository->find($id)->delete();
			return ['success'=>true, 'Departamento deletado com sucesso.'];			
		}catch (\Illuminate\Database\QueryException $e) {
			return ['error'=>true, 'Departamento não pode ser apagado pois existem usuários vinculados a ele.'];
		}
	 	catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return ['error'=>true, 'Departamento não encontrado.'];
        } catch (\Exception $e) {
             return ['error'=>true, 'Ocorreu algum erro ao excluir o departamento.'];
        }
	}

} 