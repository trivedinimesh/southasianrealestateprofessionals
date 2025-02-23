<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUserNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $first_name;
    public $last_name;
    public $email;
    public $isd_code;
    public $phone_number;

    /**
     * Create a new message instance.
     */
    public function __construct($first_name, $last_name, $email, $isd_code, $phone_number)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->isd_code = $isd_code;
        $this->phone_number = $phone_number;
    }

    public function build()
    {
        return $this->subject('New Contact Form Alert')
                    ->view('mails.admin.contact')
                    ->with([
                        'first_name' => $this->first_name,
                        'last_name' => $this->last_name,
                        'email' => $this->email,
                        'isd_code' => $this->isd_code,
                        'phone_number' => $this->phone_number,
                    ]);
    }
}
