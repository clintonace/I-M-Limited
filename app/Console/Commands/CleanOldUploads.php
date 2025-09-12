<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CleanOldUploads extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'uploads:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete old uploads older than 24 hours';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
