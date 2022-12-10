<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class ViewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Blade::componentNamespace('App\\View\\Components', 'mindaweb');
        $this->loadViewsFrom(realpath(app_path('/View/templates')), 'mindaweb');

        $this->configureComponents();
    }

    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('layout');
            $this->registerComponent('card');
            $this->registerComponent('form');
            $this->registerComponent('dropdown');
            $this->registerComponent('checkbox');
            $this->registerComponent('input');
            $this->registerComponent('icon');
            $this->registerComponent('tool-tip');
            $this->registerComponent('popup-hover');
            $this->registerComponent('list');
            $this->registerComponent('list-item');
            $this->registerComponent('table');
            $this->registerComponent('table-header');
            $this->registerComponent('table-row');
            $this->registerComponent('navigation');
            $this->registerComponent('navigation-menu');
            $this->registerComponent('navigation-item');
            $this->registerComponent('navigation-profile');
            $this->registerComponent('button-create');
            $this->registerComponent('button-update');
            $this->registerComponent('button-delete');
            $this->registerComponent('button-cancel');
            $this->registerComponent('button-submit');
        });
    }

    protected function registerComponent(string $component)
    {
        Blade::component('mindaweb::' . $component);
    }
}
