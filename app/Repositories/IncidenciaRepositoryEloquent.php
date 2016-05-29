<?php

namespace Salf\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Salf\Repositories\IncidenciaRepository;
use Salf\Entities\Incidencia;
use Salf\Validators\IncidenciaValidator;

/**
 * Class IncidenciaRepositoryEloquent
 * @package namespace App\Repositories;
 */
class IncidenciaRepositoryEloquent extends BaseRepository implements IncidenciaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Incidencia::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
