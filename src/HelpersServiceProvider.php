<?php

/**
 * Created by PhpStorm.
 * User: roman
 * Date: 18.10.16
 * Time: 8:37
 */

namespace RonasIT\Support;

use Illuminate\Support\ServiceProvider;
use RonasIT\Support\Commands\MakeEntityCommand;
use RonasIT\Support\Middleware\SecurityMiddleware;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot() {
        $router = $this->app['router'];

        $router->prependMiddlewareToGroup('api', SecurityMiddleware::class);
    }

    public function register()
    {

    }
}