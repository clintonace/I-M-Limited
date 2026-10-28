<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientCustomMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $mailSubject,
        public string $note,
    ) {}

    public function build()
    {
        return $this->subject($this->mailSubject)
            ->html(
                '<div style="font-family:Arial,sans-serif;line-height:1.6">'
                . nl2br(e($this->note))
                . '</div>'
            );
    }
}
