<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Mail\PartnerMail;
use App\Mail\ProposalMail;
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


    public function SendProposalMail(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string',
            'service' => 'required|string',
            'tools' => 'required|string',
            'duration' => 'required|string',
            'challenge' => 'required|string',
            'budget' => 'required|string',
        ]);

        $email = $request->email;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $company = $request->company;
        $service = $request->service;
        $tools = $request->tools;
        $duration = $request->duration;
        $challenge = $request->challenge;
        $budget = $request->budget;

        Mail::to('info@delsconsulting.com')->send(new ProposalMail($duration, $challenge, $budget, $email, $firstname, $lastname, $phone, $company, $service, $tools));

        return redirect()->back()->with('success', 'Your proposal has been sent successfully!');
    }


    public function SendPartnershipMail(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'company' => 'required|string',
            'challenge' => 'required|string',
            'budget' => 'required|string',
        ]);

        $email = $request->email;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $phone = $request->phone;
        $company = $request->company;
        $challenge = $request->challenge;
        $budget = $request->budget;

        Mail::to('info@delsconsulting.com')->send(new PartnerMail($challenge, $budget, $email, $firstname, $lastname, $phone, $company,));

        return redirect()->back()->with('success', 'Your partnership request has been sent successfully!');
    }
}
