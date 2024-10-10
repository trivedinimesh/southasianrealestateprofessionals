<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MembershipUpsellNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $emailData;

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct(array $emailData)
    {
        $this->emailData = $emailData;
    }

    public function build()
    {
        return $this->subject('Upgrade Your Membership')
                    ->view('mails.admin.upsell') // Blade view for the email
                    ->with($this->emailData); // Pass the data to the view
    }
}
