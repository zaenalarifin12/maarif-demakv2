<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Lembaga;
use App\Category;
use App\Licensi;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer('fe.layouts.header', function($view) {

            $lembaga  = lembaga::get();

            return $view->with('lembaga', $lembaga);
        });

        view()->composer('fe.layouts.master', function($view) {

            $category = Category::get();

            return $view->with("category", $category);
        });

        view()->composer('fe.layouts.master', function($view) {

            $licensi = Licensi::first();

            return $view->with("licensi", $licensi);
        });

        view()->composer('fe.home.index', function($view) {

            $licensi = Licensi::first();

            return $view->with("licensi", $licensi);
        });

    }
}
