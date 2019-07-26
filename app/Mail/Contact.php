<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Message;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    /**
     * Create a new contact instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Build the contact.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to('info@afghanevaluation.af', 'AFES Admin')
            ->from($this->message->email, $this->message->name)
            ->subject($this->message->subject)
            ->markdown('emails.contact');
    }
}
