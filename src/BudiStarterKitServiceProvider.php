<?php

namespace Budi\BudiStarterkit;

use Illuminate\Support\ServiceProvider;
use Budi\BudiStarterkit\Commands\InstallCommand;

class BudiStarterkitServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => resource_path('views'),
            ], 'budi-starterkit-views');

            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
