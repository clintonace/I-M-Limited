<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CandidateRescheduleMail extends Mailable
{
    use Queueable, SerializesModels;


    public $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Meeting Rescheduling')
        ->markdown('emails.candidate-reschedule-mail')
        ->with([
            'message' => $this->message,

        ]) ->attach(storage_path('app/public/IandM-no-white-bg-logo-.png'), [
            'as' => 'IandM-no-white-bg-logo.png',
            'mime' => 'image/png',
        ]);
    }
}
