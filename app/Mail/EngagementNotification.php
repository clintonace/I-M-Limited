<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EngagementNotification extends Mailable
{
    use Queueable, SerializesModels;


    public $messageContent;
    public $information;
    public $user;
    public $req;

    /**
     * Create a new message instance.
     *
     * @param string $messageContent
     */
    public function __construct($messageContent, $information, $user, $req)
    {
        $this->messageContent = $messageContent;
        $this->information = $information;
        $this->user = $user;
        $this->req = $req;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('A Client Reached Out to You')
        ->markdown('emails.plain')
        ->with([
            'message' => $this->messageContent,
            'information' => $this->information,
            'user' => $this->user,
            'req' => $this->req,
        ]) ->attach(storage_path('app/public/IandM-no-white-bg-logo-.png'), [
            'as' => 'IandM-no-white-bg-logo.png',
            'mime' => 'image/png',
        ]);
    }
}
