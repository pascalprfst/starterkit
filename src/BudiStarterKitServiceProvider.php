<?php

namespace Budi\BudiStarterkit;

use Budi\BudiStarterkit\Commands\InstallCommand;
use Illuminate\Support\ServiceProvider;

class BudiStarterKitServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => resource_path('views'),
            ], 'budi-starterkit-views');

            $this->publishes([
                __DIR__ . '/../stubs/resources/js' => resource_path('js'),
            ], 'budi-starterkit-scripts');

            $this->publishes([
                __DIR__ . '/../stubs/app' => app_path(),
            ], 'budi-starterkit-code');

            $this->publishes([
                __DIR__ . '/../stubs/routes/web.php' => base_path('routes/web.php'),
            ], 'budi-starterkit-routes');

            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
