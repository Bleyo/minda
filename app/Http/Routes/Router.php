<?php

namespace App\Http\Routes;

use TheSeer\Tokenizer\NamespaceUri;
use Illuminate\Support\NamespacedItemResolver;

use Illuminate\Support\Collection;
use Illuminate\Contracts\Filesystem\Filesystem;

use App\Sources\Enums\RouteEnum;
use App\Services\FileHandler;
use App\Http\Resources\User\ViewController as UserEntry;
use App\Http\Resources\Team\ViewController as TeamEntry;
use App\Http\Resources\Milestone\ViewController as MilestoneEntry;

class Router
{
    private FileHandler $files;
    private Collection $resources;
    private string $path;

    public const GROUPS = [
        RouteEnum::ACTION,
        RouteEnum::VIEW
    ];

    public function __construct()
    {
        // get namespace for resource
        // resource = App/Http/Resources/ -> each -> [Controllers]
        // no more -> group -> controllers -> path back 

    }

    public function getViews()
    {
    }

    public function getResources(string $path)
    {
        return $this->resources;
    }



    private function getControllers(string $resource)
    {
    }

    private function getNamespace($element)
    {
    }
}
