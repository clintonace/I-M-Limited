<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ClientMailFailureNotice extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $recipientEmail,
        public string $originalSubject,
    ) {}

    public function build()
    {
        return $this->subject('Update: Your email could not be sent')
            ->html('
                <div style="font-family:Arial,sans-serif;color:#222;
                            max-width:600px;line-height:1.7">
                    <h2 style="color:#E94E1B">Email sending update</h2>

                    <p>Hello,</p>

                    <p>
                        We were unable to send your email after several
                        attempts. We are sorry for the inconvenience.
                    </p>

                    <p><strong>Email subject:</strong> '
                        . e($this->originalSubject) . '</p>

                    <p><strong>Recipient:</strong> '
                        . e($this->recipientEmail) . '</p>

                    <p>
                        Please check the recipient email address and try
                        again. If the problem continues, contact your
                        support team for assistance.
                    </p>

                    <p>Thank you for your patience.</p>
                </div>
            ');
    }
}
