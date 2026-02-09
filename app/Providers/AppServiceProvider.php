<?php

namespace App\Providers;

use App\Http\Contract\ConfigurationInterface;
use App\Http\Handler\CreateHandler;
use App\Http\Handler\CreateHandlerInterface;
use App\Http\Repository\ConfigurationRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Handler binding
        $this->app->bind(
            CreateHandlerInterface::class,
            CreateHandler::class
        );

        // Configuration binding (THIS WAS MISSING)
        $this->app->bind(
            ConfigurationInterface::class,
            ConfigurationRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
