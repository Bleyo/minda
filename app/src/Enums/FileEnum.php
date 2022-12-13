<?php

namespace App\src\Enums;

enum FileEnum: string
{
    case DEFAULT = '.php';
    case JSON = '.json';
    case VIEW = '.blade.php';
}
