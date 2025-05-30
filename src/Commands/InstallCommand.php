<?php

namespace PascalDev\SaaSStarterkit\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'pascaldev:install';
    protected $description = 'Installiert Breeze und das SaaS-Starter Kit';

    public function handle(): void
    {
        $this->info('Installiere Laravel Breeze...');
        $this->call('breeze:install');

        $this->deleteUnusedBreezeComponents();

        $this->publishResources();

        $this->info('SaaS-Starter Kit installiert.');
    }

    private function deleteUnusedBreezeComponents(): void
    {
        $components = [
            resource_path('views/components/primary-button.blade.php'),
            resource_path('views/components/danger-button.blade.php'),
            resource_path('views/components/secondary-button.blade.php'),
            resource_path('views/components/modal.blade.php'),
            resource_path('views/components/input.blade.php'),
        ];

        foreach ($components as $component) {
            if (File::exists($component)) {
                File::delete($component);
            }
        }
    }

    private function publishResources(): void
    {
        $this->call('vendor:publish', [
            '--tag' => 'pascaldev-starterkit-views',
            '--force' => true,
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'pascaldev-starterkit-scripts',
            '--force' => true,
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'pascaldev-starterkit-code',
            '--force' => true,
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'pascaldev-starterkit-routes',
            '--force' => true,
        ]);

        $this->call('vendor:publish', [
            '--tag' => 'pascaldev-starterkit-databse',
            '--force' => true,
        ]);
    }
}
