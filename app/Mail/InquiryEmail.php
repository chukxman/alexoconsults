<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $subject, $csv, $inquiry)
    {
        //
        $this->subject = $subject;
        $this->details = $details;
        $this->csv = $csv;
        $this->inquiry = $inquiry;
    }


    public function build()
    {
        return $this->subject($this->subject)
        ->view('email.inquiry')
        ->with([
            'details' => $this->details,
            'inquiry' => $this->inquiry,  // Pass the registration to the view
            'csv' => $this->csv  // Pass the registration to the view
        ])
        ->from('no-reply@alexoconsults.com');
       
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Inquiry Email',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'email.inquiry',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
