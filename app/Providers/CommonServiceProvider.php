<?php

namespace App\Providers;

use App\Models\ProductCategory;
use Illuminate\Support\ServiceProvider;

class CommonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->topMenu();
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function topMenu()
    {
        \View::composer('front.partials.header', function($view){
            $view->with('catalog_menu', ProductCategory::where('is_in_catalog', 1)
                ->where('enabled', 1)
                ->with(['children' => function ($query){
                    $query->where('enabled', 1)->with('description', 'files.images', 'slug');
                }])
                ->with('description', 'files.images', 'slug')
                ->get());
        });
    }
}
