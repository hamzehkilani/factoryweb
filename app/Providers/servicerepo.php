<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\IRepositry\AdminInterface;
use App\Repositry\AdminRepo;
use App\IRepositry\Mediainterface;
use App\Repositry\Mediarepo;
use App\IRepositry\HeaderInterface;
use App\Repositry\HeaderRepo;

class servicerepo extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            AdminInterface::class,
            AdminRepo::class
        );
        $this->app->bind(
            Mediainterface::class,
            Mediarepo::class
        );

        $this->app->bind(
            HeaderInterface::class,
            HeaderRepo::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
