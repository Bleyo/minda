<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

class MaintenanceViews extends Middleware
{
    /**
     * Reachable route whilst in maintenance mode
     * @var array<int, string>
     */
    protected $except = [
        // Define admin section
    ];
}
