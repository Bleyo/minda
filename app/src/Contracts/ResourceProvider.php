<?php

namespace App\src\Contracts;

use Illuminate\Support\Collection;

interface ResourceProvider
{
    /**
     * Get application's models requiring routes 
     *
     * @return array
     */
    public function getResources(): Collection;
}
