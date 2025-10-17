<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;


class AiUserNotifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;   
    public $password;   
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $password)
    {
        $this->user = $user;   
        $this->password = $password;    
    }

//    protected function passwordResetUrl()
//    {
//         return route('ai-change-password-view', $this->user->id);
//    }

   protected function passwordResetUrl()
    {
        return URL::temporarySignedRoute(
            'ai-change-password-view',
            now()->addMinutes(20), // expires in 5 minutes
            ['id' => $this->user->id]
        );
    }
 
     /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = $this->passwordResetUrl();
        // dd($url);

        return $this
        ->subject('AI User Account Created')
        ->markdown('emails.ai-user-notify')
        ->with([
            'message' => $this->user,
            'password' => $this->password,
            'url'=> $url

        // ]) ->attach(storage_path('app/public/IandM-black-bg-logo.jpg'), [
        //     'as' => 'IandM-no-white-bg-logo.png',
        //     'mime' => 'image/png',
        ]);
    }
}
