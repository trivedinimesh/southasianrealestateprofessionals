<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class MembershipExpiredNotification extends Mailable
{
    use Queueable, SerializesModels;

   
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->subject('Your Membership Has Expired')
        ->view('mails.user.membership-expired')
                    ->with([
                        'first_name' => $this->user->first_name,
                        
                    ]);
    }
}