<?php

namespace App\src\Contracts;

interface Resource
{
    /**
     * Returns associative array for resource's route model binding
     *
     * @return array
     */
    public function getBind(): array;
}
