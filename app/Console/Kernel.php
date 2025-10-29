<?php

namespace App\Console;

use App\Models\AiUpload;
use App\Models\Deleted;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function () {
            try {
                $updated = AiUpload::where('created_at', '<', now()->subMinutes(60))
                    ->where('status','converted')
                    ->update(['status' => 'deleted']);

                    $delete = AiUpload::where('created_at', '<', now()->subDay())
                    ->where('status', 'deleted')->get();

                    foreach($delete as $deleted){

                         Deleted::create([
                            'file_name'      => $deleted->file_name,
                            'path'           => $deleted->path,
                            'original_name'  => $deleted->original_name,
                            'status'         => 'deleted_permanently',
                            'txt'            => $deleted->txt,
                            'batch'          => $deleted->batch,
                        ]);

                        // remove from AiUpload table
                        $deleted->delete();
                    }

                    // $delete->delete();

                \Log::info("Scheduler: Marked {$updated} uploads as failed.");
                \Log::info("Scheduler: Marked {$deleted} uploads as failed.");

            } catch (\Throwable $e) {
                \Log::error("Scheduler failed: " . $e->getMessage(), [
                    'file' => $e->getFile(),
                    'line' => $e->getLine(),
                    'trace' => $e->getTraceAsString(),
                ]);
            }

                //         try {
                //     $query = AiUpload::where('created_at', '<', now()->subHour())
                //         ->whereNull('status');

                //     $count = $query->count(); // how many rows match?
                //     \Log::info("Scheduler: Found {$count} uploads older than 1hr with NULL status.");

                //     $updated = $query->update(['status' => 'failed']);
                //     \Log::info("Scheduler: Marked {$updated} uploads as failed.");
                // } catch (\Throwable $e) {
                //     \Log::error("Scheduler failed: " . $e->getMessage(), [
                //         'file' => $e->getFile(),
                //         'line' => $e->getLine(),
                //     ]);
                // }
        })->everyMinute();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {

        // \App\Console\Commands\CleanOldUploads::class;

        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

//     protected $commands = [
//     \App\Console\Commands\CleanOldUploads::class,
// ];
}
