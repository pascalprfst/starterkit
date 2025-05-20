<?php

namespace Budi\BudiStarterkit\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'budi:install';
    protected $description = 'Installiert Breeze und das Budi Starter Kit';

    public function handle() : void
    {
        $this->info('Installiere Laravel Breeze...');
        $this->call('breeze:install');

        $this->deleteUnusedBreezeComponents();

        $this->info('Veröffentliche Budi Starter Kit Views...');
        $this->call('vendor:publish', [
            '--tag' => 'budi-starterkit-views',
            '--force' => true
        ]);

        $this->info('Budi Starter Kit installiert.');
    }

    private function deleteUnusedBreezeComponents() : void
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
}
