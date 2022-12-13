<?php

namespace App\src\Services;

use Illuminate\Support\Collection;
use App\src\Contracts\ResourceProvider as ContractsResourceProvider;

class ResourceProvider implements ContractsResourceProvider
{
    private Collection $resources;

    public function __construct()
    {
        self::$resources->collect(
            [User::class, Milestone::class, Team::class]
        );
    }

    /**
     * Get application's models requiring routes 
     *
     * @return array
     */
    public function getResources(): Collection
    {
        return self::$resources;
    }
}
