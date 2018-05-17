<?php

namespace App\Providers;

use App\Contracts\RoleRepository;
use App\Contracts\UserRepository;
use App\Repositories\Eloquent\EloquentRoleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRepository::class,
            \App\Repositories\Eloquent\EloquentUserRepository::class
            );
        $this->app->bind(
            RoleRepository::class,
            EloquentRoleRepository::class
        );
    }
}
