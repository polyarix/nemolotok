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
            $view->with('categories', ProductCategory::whereHas('children')->with('children.files.images')->get());
        });
    }
}
