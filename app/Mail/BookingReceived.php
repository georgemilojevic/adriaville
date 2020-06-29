<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingReceived extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * BookingReceived constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('info@adriaville.com')
            ->subject('Adriaville: Booking received!') // Mail subject
            ->view('mail.index', [
                'data' => $this->data,
            ]);
        //resources/views/mail/index.blade.php
    }
}
