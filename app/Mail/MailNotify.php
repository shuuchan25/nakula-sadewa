<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailNotify extends Mailable
{
    use Queueable, SerializesModels;

    private $data = [];
    private $transaction = [];
    private $allItems = [];
    /**
     * Create a new message instance.
     */
    public function __construct($data, $transaction, $allItems)
    {
        $this->data = $data;
        $this->transaction = $transaction;
        $this->allItems = $allItems;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('zeydaliison@gmail.com', 'Nakula Sadewa'),
            subject: $this->data['subject']
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.index',
            with: [
                'data' => $this->data, 
                'transaction' => $this->transaction, 
                'allItems' => $this->allItems
            ]
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
