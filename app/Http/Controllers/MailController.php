<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contact(Request $request)
    {
        $validatedInput = $request->validate([
            'fullname' => 'required',
            'email' => 'required|email:dns',
            'subject' => 'required|max:255',
            'message' => 'required|min:5|max:255',
            'g-recaptcha-response' => 'required|recaptchav3:/,0.5'
        ]);

        $validatedInput['subject_email'] = 'Contact Form Notification';
        $validatedInput['view'] = 'contact-us';

        Mail::to('info@transporters.solutions')->send(new \App\Mail\Mailer($validatedInput));


        return redirect('/#kontak-kami')->with('mailSent', 'Pesan berhasil dikirim');
    }
}
