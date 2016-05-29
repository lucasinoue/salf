<?php

namespace Salf\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Salf\Repositories\MotivoRepository;
use Salf\Entities\Motivo;
use Salf\Validators\MotivoValidator;

/**
 * Class MotivoRepositoryEloquent
 * @package namespace Salf\Repositories;
 */
class MotivoRepositoryEloquent extends BaseRepository implements MotivoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Motivo::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
