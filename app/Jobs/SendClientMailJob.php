<?php

namespace App\Jobs;

use App\Mail\ClientCustomMail;
use App\Mail\ClientMailFailureNotice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendClientMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // Initial attempt + 2 retries = 3 attempts total.
    public int $tries = 3;

    public int $timeout = 120;

    public function __construct(
        public string $recipientEmail,
        public string $senderEmail,
        public string $subject,
        public string $note,
    ) {}

    public function handle(): void
    {
        Mail::to($this->recipientEmail)->send(
            new ClientCustomMail($this->subject, $this->note)
        );
    }

    public function failed(?Throwable $exception): void
    {
        // Runs after the job has exhausted its attempts.
        Mail::to($this->senderEmail)->queue(
            new ClientMailFailureNotice(
                $this->recipientEmail,
                $this->subject,
            )
        );
    }
}
