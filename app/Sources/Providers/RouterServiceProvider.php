<?php

namespace App;

use Illuminate\Support\ServiceProvider;
use App\Services\Router;

class RouterServiceProvider extends ServiceProvider
{

    public function register()
    {
        // Binding router dependencies, which will be automatically injected using those dependencies' binds.
        $this->app->bind(Router::class, function ($app) {
            return new Router($app->make(Resource::class));
        });

        // Add elements upon resolving router --> routes provider 
        $this->app->resolving(Router::class, function ($router, $app) {
            return new Router();
        });
    }

    public function boot()
    {
    }
}
