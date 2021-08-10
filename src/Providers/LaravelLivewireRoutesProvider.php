<?php

namespace Bastinald\LaravelLivewireRoutes\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelLivewireRoutesProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}
