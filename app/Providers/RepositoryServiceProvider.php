<?php

namespace App\Providers;

use App\Contracts\CategoryRepository;
use App\Contracts\NewsRepository;
use App\Contracts\PermissionRepository;
use App\Contracts\RoleRepository;
use App\Contracts\RuleRepository;
use App\Contracts\UserRepository;
use App\Repositories\Eloquent\EloquentCategoryRepository;
use App\Repositories\Eloquent\EloquentNewsRepository;
use App\Repositories\Eloquent\EloquentPermissionRepository;
use App\Repositories\Eloquent\EloquentRoleRepository;
use App\Repositories\Eloquent\EloquentRuleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        UserRepository::class => \App\Repositories\Eloquent\EloquentUserRepository::class,
        RoleRepository::class => EloquentRoleRepository::class,
        RuleRepository::class => EloquentRuleRepository::class,
        PermissionRepository::class => EloquentPermissionRepository::class,
        CategoryRepository::class => EloquentCategoryRepository::class,
        NewsRepository::class => EloquentNewsRepository::class
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
