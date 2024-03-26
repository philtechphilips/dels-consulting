<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendMail extends Controller
{
    public function SendContactMail(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'messages' => 'required|string',
        ]);

        $email = $request->email;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $messages = $request->messages;

        Mail::to('info@delsconsulting.com')->send(new ContactEmail($email, $firstname, $lastname, $phone, $messages));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
