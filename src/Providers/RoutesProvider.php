<?php

namespace Bastinald\Routes\Providers;

use Illuminate\Support\ServiceProvider;

class RoutesProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}
