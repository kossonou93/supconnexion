<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyPasswordIntervenant extends Mailable
{
    use Queueable, SerializesModels;
    public $inter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inter)
    {
        $this->inter = $inter;
        //var_dump($inter);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.intervenant-password');
    }
}
