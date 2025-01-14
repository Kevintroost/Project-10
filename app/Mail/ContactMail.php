<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The contact instance.
     *
     * @var object
     */
    protected $contact;
    protected $url;

    /**
     * Create a new message instance.
     */
    public function __construct($contact, $url)
    {
        $this->contact = $contact;
        $this->url = $url;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.contact',
            with: [
                'name' => $this->contact->name,
                'email' => $this->contact->email,
                'phone' => $this->contact->phonenumber,
                'details' => $this->contact->message,
                'url' => $this->url,
            ]
        );
    }

    public function getContact()
    {
        return $this->contact;
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
