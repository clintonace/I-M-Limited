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
                $updated = AiUpload::where('created_at', '<', now()->subMinutes(2))
                    ->where('status','converted')
                    ->update(['status' => 'deleted']);

                    $delete = AiUpload::where('created_at', '<', now()->subDay())
                    ->where('status', 'deleted')->get();

                    foreach($delete as $deleted){

                        $deletedUploads = new Deleted();
                        $deletedUploads->file_name = $deleted->file_name;
                        $deletedUploads->path = $deleted->path;
                        $deletedUploads->original_name = $deleted->original_name;
                        $deletedUploads->status = 'deleted_permanently';
                        $deletedUploads->txt = $deleted->txt;
                        $deletedUploads->batch = $deleted->batch;
                        $deletedUploads->save();
                    }

                    $delete->delete();

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
