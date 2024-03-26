<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProposalMail extends Mailable
{
    use Queueable, SerializesModels;
    public $duration;
    public $challenge;
    public $budget;
    public $email;
    public $firstname;
    public $lastname;
    public $phone;
    public $company;
    public $service;
    public $tools;

    /**
     * Create a new message instance.
     */
    public function __construct($duration, $challenge, $budget, $email, $firstname, $lastname, $phone, $company, $service, $tools)
    {
        $this->duration = $duration;
        $this->challenge = $challenge;
        $this->budget  = $budget;
        $this->email  = $email;
        $this->firstname  = $firstname;
        $this->lastname  = $lastname;
        $this->phone  = $phone;
        $this->company  = $company;
        $this->service  = $service;
        $this->tools  = $tools;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Proposal Mail from Dels Consulting',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'proposal',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
