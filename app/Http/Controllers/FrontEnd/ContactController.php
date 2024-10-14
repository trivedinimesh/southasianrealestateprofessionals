<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function contactMailSend(ContactRequest $request)
    {
        $admins = \App\Models\User::role('admin')->get(); 

        // Extract validated data from the request
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $isd_code = $request->isd_code;
        $phone_number = $request->phone_number;

        // Send email to each admin
        foreach ($admins as $admin) {
            \Mail::to($admin->email)->send( new \App\Mail\ContactUserNotification(
                $first_name,
                $last_name,
                $email,
                $isd_code,
                $phone_number
            ));
        }

        return back()->with('success', 'Your message has been sent!');

    }
}
