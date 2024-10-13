<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Subscription;

class UserSubscriptionRenewalNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $subscription;

    /**
     * Create a new message instance.
     */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function build()
    {
        return $this->subject('Membership Renewal Successful')
                    ->view('mails.user.subscription-renewal')
                    ->with([
                        'first_name' => $this->subscription->user->first_name,
                        'last_name' => $this->subscription->user->last_name,
                        'email' => $this->subscription->user->email,
                        'planName' => $this->subscription->plan->name,
                        'startsAt' => $this->subscription->starts_at,
                        'endsAt' => $this->subscription->ends_at,
                    ]);
    }
}
