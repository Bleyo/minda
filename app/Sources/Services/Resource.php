<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;

class Resource
{
    public function getAll(Model $model)
    {
        return $model->all();
    }
}
