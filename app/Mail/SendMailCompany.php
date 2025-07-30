<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailCompany extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public array $data)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            to: env('MAIL_COMPANY_ADDRESS'),
            subject: 'New Submission Message From Website',
            from: new Address(env('MAIL_FROM_ADDRESS'), 'Website Company Profile PT Adhi Cahaya Global'),
            replyTo: [new Address($this->data['email'], $this->data['name'])],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.template-company',
            with: [
                'title' => 'New Message',
                'name' => $this->data['name'],
                'phone' => $this->data['phone'],
                'messageEmail' => $this->data['message'],
                'email' => $this->data['email'],
            ],
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
