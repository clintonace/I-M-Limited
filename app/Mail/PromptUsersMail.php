<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PromptUsersMail extends Mailable
{
    use Queueable, SerializesModels;


    public $usersPrompt;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($usersPrompt)
    {
        $this->usersPrompt = $usersPrompt;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject('Form filing reminder.')
        ->markdown('emails.form-filling-reminder')
        ->with([
            'usersPrompt' => $this->usersPrompt,

        ]) ;
    }
}
