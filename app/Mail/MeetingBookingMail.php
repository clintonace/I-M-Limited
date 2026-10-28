<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\SerializesModels;

class MeetingBookingMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $recipientType;
    public $clientEmail;
    public $meetingDate;
    public $startTime;
    public $endTime;
    public $notes;

    public function __construct(
        $recipientType,
        $clientEmail,
        $meetingDate,
        $startTime,
        $endTime,
        $notes = null
    ) {
        $this->recipientType = $recipientType;
        $this->clientEmail = $clientEmail;
        $this->meetingDate = $meetingDate;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
        $this->notes = $notes;
    }

    public function build()
    {
        $subject = $this->recipientType === 'admin'
            ? 'New Client Meeting Booking'
            : 'Your Meeting Booking Confirmation';

        return $this->subject($subject)
            ->view('emails.meeting-booking');
    }
}