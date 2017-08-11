<?php

namespace Tyondo\Team\Commands\Publish;

use Illuminate\Support\Facades\Artisan;
use Tyondo\Team\Commands\TeamCommand;

class Config extends TeamCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'team:publish:config {--y|y : Skip question?} {--f|force : Overwrite existing files.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Team config files';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Gather options...
        $publish = $this->option('y') ?: false;
        $force = $this->option('force') ?: false;

        if (! $publish) {
            $publish = $this->confirm('Publish Team core config files?');
        }

        // Publish config...
        if ($publish) {
            $exitCode = Artisan::call('vendor:publish', [
                '--provider' => 'Tyondo\Team\TyondoTeamServiceProvider',
                '--tag' => 'config',
                '--force' => $force,
            ]);
            $this->progress(5);
            $this->line(PHP_EOL.'<info>✔</info> Success! Team core config files have been published.');
        }
    }
}
