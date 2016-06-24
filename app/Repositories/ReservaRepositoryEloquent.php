<?php

namespace Salf\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use Salf\Repositories\ReservaRepository;
use Salf\Entities\Reserva;
use Salf\Validators\ReservaValidator;

/**
 * Class ReservaRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ReservaRepositoryEloquent extends BaseRepository implements ReservaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Reserva::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
