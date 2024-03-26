<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PartnerMail extends Mailable
{
    use Queueable, SerializesModels;
    public $budget;
    public $email;
    public $firstname;
    public $lastname;
    public $phone;
    public $company;
    public $challenge;

    /**
     * Create a new message instance.
     */
    public function __construct($challenge, $budget, $email, $firstname, $lastname, $phone, $company)
    {
        $this->challenge = $challenge;
        $this->budget  = $budget;
        $this->email  = $email;
        $this->firstname  = $firstname;
        $this->lastname  = $lastname;
        $this->phone  = $phone;
        $this->company  = $company;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Partner Mail from Dels Consulting',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'partnership',
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
