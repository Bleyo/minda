<?php

namespace App\Http\Middleware;

use Illuminate\Session\Middleware\AuthenticateSession as BaseAuthenticateSession;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Auth\Guard;

class AuthenticatePictet extends BaseAuthenticateSession
{
    /**
     * Get the guard instance that should be used by the middleware.
     * @see routes.web
     * @return \Illuminate\Contracts\Auth\Guard
     */
    protected function guard(): Guard
    {
        return app(StatefulGuard::class);
    }
}
