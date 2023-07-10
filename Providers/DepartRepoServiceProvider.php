<?php

namespace App\Providers;
// use  App\Repositories\Department\DepartRepository;
use Illuminate\Support\ServiceProvider;


class DepartRepoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Contracts\admin\DepartInterface',
        'App\Repositories\Department\DepartRepository');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
