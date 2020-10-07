<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact_form_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_form_data)
    {
        $this->contact_form_data = $contact_form_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact.contact-form');
    }
}
