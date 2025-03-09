<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FeedbackEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $feedback_subject,$name,$message)
    {
        //
        $this->subject = $feedback_subject;
        $this->details = $details;
        $this->name = $name;
        $this->message = $message;
    }

    public function build()
    {
        return $this->subject($this->subject)
        ->view('email.feedback')
        ->with([
            'details' => $this->details,
            'name' => $this->name, // Pass the registration to the view
            'message' => $this->message  // Pass the registration to the view
        ])
        ->from('info@alexoconsults.com');
       
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */

    public function envelope()
    {
        return new Envelope(
            subject: 'Feedback Email',
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
            markdown: 'email.feedback',
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
