<?php

namespace DarrinDeal\DeadDrop\Commands;

use Illuminate\Console\Command;

class Load extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deaddrop:load';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loads a drop from the dead drop location and loads it into the current environment.';

    /**
     * Execute the console command.
     */
    public function handle(): void {}
}
