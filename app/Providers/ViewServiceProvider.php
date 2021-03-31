<?php

namespace App\Providers;

use App\Category;
use App\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('user.inc.header' , function($view) {
     
             $view->with('cats' , Category::get());
             $view->with('sett' , Setting::first());


        });

        view()->composer('user.inc.footer' , function($view) {
     
            
            $view->with('sett' , Setting::first());


       });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
