<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class UserBookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function build()
    {
        return $this->subject('Event Booking Confirmation')
                    ->view('mails.user.booking')
                    ->with([
                        'first_name' => $this->booking->user->first_name,
                        'last_name' => $this->booking->user->last_name,
                        'email' => $this->booking->user->email,
                        'event_title' => $this->booking->event->title,
                        'date' => $this->booking->event->date,
                        'image' => asset('images/events/' . $this->booking->event->image),
                        'booking_id' => $this->booking->booking_id,
                        'event_link' => url('/event-detail/' . $this->booking->event->id) 

                    ]);
    }
}
