<?php

namespace App\Providers;
use App\Interfaces\OrderRepositoryInterface;
use App\Interfaces\EmployeeRepositoryInterface;
use App\Interfaces\PayscaleRepositoryInterface;
use App\Repositories\OrderRepository;
use App\Repositories\EmployeeRepository;
use App\Repositories\PayscaleRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OrderRepositoryInterface::class, OrderRepository::class);
        $this->app->bind(EmployeeRepositoryInterface::class,EmployeeRepository::class);
        $this->app->bind(PayscaleRepositoryInterface::class,PayscaleRepository::class);
        // $this->app->bind();
        // $this->app->bind();
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
