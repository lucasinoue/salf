<?php

namespace Salf\Providers;

use Illuminate\Support\ServiceProvider;

class SalfRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Salf\Repositories\DepartamentoRepository::class,
            \Salf\Repositories\DepartamentoRepositoryEloquent::class
        );

        $this->app->bind(
            \Salf\Repositories\SalaRepository::class,
            \Salf\Repositories\SalaRepositoryEloquent::class
        );
    
        $this->app->bind(
            \Salf\Repositories\IncidenciaRepository::class,
            \Salf\Repositories\IncidenciaRepositoryEloquent::class
        );

        $this->app->bind(
            \Salf\Repositories\MotivoRepository::class,
            \Salf\Repositories\MotivoRepositoryEloquent::class
        );

        $this->app->bind(
            \Salf\Repositories\UserRepository::class,
            \Salf\Repositories\UserRepositoryEloquent::class
        );

    }
}
