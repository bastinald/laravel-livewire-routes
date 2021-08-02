<?php

namespace Bastinald\LaravelLivewireRoutes\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelLivewireRoutesProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

        $this->publishes(
            [__DIR__ . '/../../config/laravel-livewire-routes.php' => config_path('laravel-livewire-routes.php')],
            ['laravel-livewire-routes', 'laravel-livewire-routes:config']
        );
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/laravel-livewire-routes.php', 'laravel-livewire-routes');
    }
}
