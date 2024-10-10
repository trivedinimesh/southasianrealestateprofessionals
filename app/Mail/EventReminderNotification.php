<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EventReminderNotification extends Mailable
{
    use Queueable, SerializesModels;

   
    public $event;

    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function build()
    {
        return $this->subject('Upcoming Event Reminder')
                    ->view('mails.user.eventreminder')
                    ->with([
                        'event_name' => $this->event->name,
                        'event_date' => $this->event->event_date,
                        'user_name' => $this->event->user->name
                    ]);
    }
}
