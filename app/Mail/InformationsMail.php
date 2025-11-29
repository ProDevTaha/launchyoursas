<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InformationsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // will hold form data

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Form Submission')
                    ->markdown('emails.informations')
                    ->with('data', $this->data);
    }
}
