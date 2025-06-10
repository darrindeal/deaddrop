<?php

namespace DarrinDeal\DeadDrop\Commands;

use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class Drop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deaddrop:drop {drop}
                            {--force : Force the drop to be created, even if it already exists.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a drop and uploads it to the dead drop location.';

    /**
     * Execute the console command.
     */
    public function handle(): void {
        Storage::disk('local')->makeDirectory('drops');
    }
}
