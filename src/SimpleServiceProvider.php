<?php


namespace Brazhinskyserhei\Simple;

use Illuminate\Support\ServiceProvider;

class SimpleServiceProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('simple',function ($app){
            $simple = new SimpleService('test');
            return $simple;
        });
    }
}