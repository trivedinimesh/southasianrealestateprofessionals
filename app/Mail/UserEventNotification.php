<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Event;

class UserEventNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $event;

    /**
     * Create a new message instance.
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }

    public function build()
    {
        return $this->subject('New Event Alert')
                    ->view('mails.user.event')
                    ->with([
                        'event_title' => $this->event->title,
                        'date' => $this->event->date,
                        'address' => $this->event->address,
                        'city' => $this->event->city,
                        'state' => $this->event->state,
                        'country' => $this->event->country,
                        'pincode' => $this->event->pincode,
                        'image' => asset('images/events/' . $this->event->image),
                        'event_link' => url('/event-detail/' . $this->event->id) 

                    ]);
    }
}
