<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class EventReminderNotification extends Mailable
{
    use Queueable, SerializesModels;

   
    public $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('Upcoming Event Reminder')
                    ->view('mails.user.eventreminder')
                    ->with([
                        'event_title' => $this->booking->event->title,
                        'event_date' => $this->booking->event->date,
                        'first_name' => $this->booking->user->first_name,
                        'last_name' => $this->booking->user->last_name
                    ]);
    }
}
