<?php

namespace App\Providers;

use App\Contracts\CategoryRepository;
use App\Contracts\ImageSettingsRepository;
use App\Contracts\NewsRepository;
use App\Contracts\PermissionRepository;
use App\Contracts\ProductCategoryRepository;
use App\Contracts\ProductRepository;
use App\Contracts\RoleRepository;
use App\Contracts\RuleRepository;
use App\Contracts\SettingsRepository;
use App\Contracts\UserRepository;
use App\Repositories\Eloquent\EloquentCategoryRepository;
use App\Repositories\Eloquent\EloquentImageSettingsRepository;
use App\Repositories\Eloquent\EloquentNewsRepository;
use App\Repositories\Eloquent\EloquentPermissionRepository;
use App\Repositories\Eloquent\EloquentProductCategoryRepository;
use App\Repositories\Eloquent\EloquentProductRepository;
use App\Repositories\Eloquent\EloquentRoleRepository;
use App\Repositories\Eloquent\EloquentRuleRepository;
use App\Repositories\Eloquent\EloquentSettingsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        UserRepository::class => \App\Repositories\Eloquent\EloquentUserRepository::class,
        RoleRepository::class => EloquentRoleRepository::class,
        RuleRepository::class => EloquentRuleRepository::class,
        PermissionRepository::class => EloquentPermissionRepository::class,
        CategoryRepository::class => EloquentCategoryRepository::class,
        NewsRepository::class => EloquentNewsRepository::class,
        ProductRepository::class => EloquentProductRepository::class,
        ProductCategoryRepository::class => EloquentProductCategoryRepository::class,
        SettingsRepository::class => EloquentSettingsRepository::class
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
