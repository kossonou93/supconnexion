<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyPasswordEcole extends Mailable
{
    use Queueable, SerializesModels;
    public $ecol;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ecol)
    {
        $this->ecol = $ecol;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.ecole-password');
    }
}
