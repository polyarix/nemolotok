<?php

namespace App\Providers;

use App\Contracts\RoleRepository;
use App\Contracts\UserRepository;
use App\Models\Rule;
use App\Repositories\Eloquent\EloquentRoleRepository;
use App\Repositories\Eloquent\EloquentRuleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        UserRepository::class => \App\Repositories\Eloquent\EloquentUserRepository::class,
        RoleRepository::class => EloquentRoleRepository::class,
        Rule::class => EloquentRuleRepository::class
    ];
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
        foreach($this->repositories as $abstract => $concrete) {
            $this->app->bind($abstract, $concrete);
        }
    }
}