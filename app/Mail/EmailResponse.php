<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailResponse extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details,$subject,$registration,$file1Url,$file2Url,$csv)
    {
        $this->details = $details;
        // $this->filePath = $filePath;
        $this->subject = $subject;
        $this->registration = $registration;
        $this->file1Url = $file1Url;
        $this->file2Url = $file2Url;
        $this->csv = $csv;
    }

    public function build()
    {
        return $this->subject($this->subject)
        ->view('email.response')
        ->with([
            'details' => $this->details,
            'registration' => $this->registration,  // Pass the registration to the view
            'file1url' => $this->file1Url,  // Pass the registration to the view
            'file2url' => $this->file2Url,  // Pass the registration to the view
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
            subject: $this->subject,
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
            view: 'email.response',
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
