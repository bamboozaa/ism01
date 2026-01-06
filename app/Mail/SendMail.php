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
            subject: $this->testMailData['program_interested'] . ', UTCC',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // dd($this->testMailData['program_interested']);
        switch ($this->testMailData['program_interested']) {
            case 'BBA - International Business Management':
                return new Content(
                    view: 'emails.bba',
                );
            break;

            case 'BACC – Bachelor of Accountancy':
                return new Content(
                    view: 'emails.bacc',
                );
            break;

            case 'GLOBAL MBA':
                return new Content(
                    view: 'emails.gmba',
                );
            break;

            case 'XMBA':
                return new Content(
                    view: 'emails.xmba',
                );
            break;

            case 'Doctor of Management':
                return new Content(
                    view: 'emails.dm',
                );
            break;

            case 'Bachelor Foundation Certificate Program (BFCP)':
                return new Content(
                    view: 'emails.bfcp',
                );

            case 'BA - Tourism and Hospitality Management':
                return new Content(
                    view: 'emails.ba',
                );
            break;

            default:
                # code...
                break;
        }
        // return new Content(
        //     view: 'emails.template01',
        // );
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
