<?php

namespace App\Providers;

use App\TestFolder\TestClass;
use Illuminate\Support\ServiceProvider;


class TestProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('Testclass',function (){

            return new TestClass();

        });



    }

    public function provides()
    {
   //     return parent::provides(); // TODO: Change the autogenerated stub
    return ['Testclass'];
    }
}
