<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->subject('New Contact Form Message')
            ->from($this->data['email'], $this->data['name']) // optional
            ->replyTo($this->data['email']) // optional
            ->view('emails.contact')
            ->with([
                'name' => $this->data['name'],
                'email' => $this->data['email'],
                'messageContent' => $this->data['message'],
            ]);
    }
}
