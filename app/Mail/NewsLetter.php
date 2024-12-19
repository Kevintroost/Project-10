<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsLetter extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $title;
    public $description;
    public $imageurl;

    public $url;

    public function __construct($title, $description, $imageurl, $url)
    {
        $this->title = $title;
        $this->description = $description;
        $this->imageurl = $imageurl;
        $this->url = $url;
        
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'News Letter',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
{
    return (new Content(
        view: 'emails.newsletter',
    ))->with([
        'title' => $this->title,
        'description' => $this->description,
        'image' => $this->imageurl,
        'url' => $this->url,
    ]);
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
