<?php

namespace App\Providers;

use App\Http\Middleware\cansee;
use DB;
use App;
use App\Models\Admins;
use App\Models\lead;
use App\Models\TestClass;
use Illuminate\Support\Facades\Route;
use App\Models\data;
use Illuminate\Support\ServiceProvider;
use Leads;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(data::class,function($app){
            return new data('aaa');
                 });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
