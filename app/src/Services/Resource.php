<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Resource
{
    private $resource;
    
    public function __construct(Model $resource)
    {
        $this->resource = $resource;
    }
}
