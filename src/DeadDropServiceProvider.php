<?php

namespace DarrinDeal\DeadDrop;

use DarrinDeal\DeadDrop\Commands\Drop;
use DarrinDeal\DeadDrop\Commands\Load;
use Illuminate\Support\ServiceProvider;

class DeadDropServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        $this->handleCommands();
        $this->handleConfig();
    }

    protected function handleCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Drop::class,
                Load::class,
            ]);
        }
    }

    protected function handleConfig(): void
    {
        $configPath = __DIR__.'/../config/deaddrop.php';
        $this->publishes([$configPath => base_path('config/livewire.php')], ['deaddrop', 'deaddrop:config']);
        $this->mergeConfigFrom($configPath, 'deaddrop');
    }
}
