<?php

namespace PascalDev\SaaSStarterkit;

use Illuminate\Support\ServiceProvider;
use PascalDev\SaaSStarterkit\Commands\InstallCommand;

class SaaSStarterKitServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../stubs/resources/views' => resource_path('views'),
            ], 'pascaldev-starterkit-views');

            $this->publishes([
                __DIR__ . '/../stubs/resources/js' => resource_path('js'),
            ], 'pascaldev-starterkit-scripts');

            $this->publishes([
                __DIR__ . '/../stubs/app' => app_path(),
            ], 'pascaldev-starterkit-code');

            $this->publishes([
                __DIR__ . '/../stubs/routes/web.php' => base_path('routes/web.php'),
            ], 'pascaldev-starterkit-routes');

            $this->publishes([
                __DIR__ . '/../stubs/database' => app_path('database'),
            ], 'pascaldev-starterkit-database');

            $this->commands([
                InstallCommand::class,
            ]);
        }
    }
}
