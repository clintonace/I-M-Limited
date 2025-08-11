<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $message;


    /**
     * Create a new message instance.
     *
     * @param string $messageContent
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
        ->subject('Meeting Booking Notification')
        ->markdown('emails.booking-notification')
        ->with([
            'message' => $this->message,

        ]) ->attach(storage_path('app/public/IandM-no-white-bg-logo-.png'), [
            'as' => 'IandM-no-white-bg-logo.png',
            'mime' => 'image/png',
        ]);
    }
}
