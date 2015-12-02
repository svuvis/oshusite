<?php

namespace App\Providers;

use App\Faculty;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('future', function($attribute, $value, $parameters) {
            return Carbon::parse($value)->isFuture();
        });
        view()->composer('includes.public.svmenu', function($view){
            $view->with('faculties', Faculty::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
