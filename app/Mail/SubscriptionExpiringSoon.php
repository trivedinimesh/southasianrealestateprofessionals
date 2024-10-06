<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionExpiringSoon extends Mailable
{
    use Queueable, SerializesModels;


    public $user;
    public $daysLeft;


    /**
     * Create a new message instance.
     */
    public function __construct($user, $daysLeft)
    {
        $this->user = $user;
        $this->daysLeft = $daysLeft;
    }

    public function build()
    {
        return $this->subject('Your Subscription is Expiring Soon!')
                    ->view('mails.user.expiring-soon')
                    ->with([
                        'first_name' => $this->user->first_name,
                        'last_name' => $this->user->last_name,
                        'daysLeft' => $this->daysLeft,
                    ]);
    }
}
