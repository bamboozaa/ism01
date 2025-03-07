<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $testMailData;

    /**
     * Create a new message instance.
     */
    public function __construct($testMailData)
    {
        $this->testMailData = $testMailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'UTCC INTERNATIONAL ENQUIRY FORM',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // dd($testMailData['program_interested']);
        return new Content(
            view: 'emails.template01',
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
