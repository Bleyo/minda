<?php

namespace App;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Helpers\Helper;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/';

    public function boot()
    {
        /*
        * $this->routes(function (Helper $config) {
            foreach ($config->getRoutes() as $name => $prefix) {
                $this->configureRoute($name, $prefix);
            }
        });
        */
    }

    protected function configureRoute(string $name, string $path)
    {
        Route::middleware($name)->prefix($name)
            ->group($path);
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
