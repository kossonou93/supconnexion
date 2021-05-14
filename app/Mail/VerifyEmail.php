<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
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
        //var_dump("test");
        return $this->view('mail.signup-email');
        //var_dump($inter);
        //return $this->from('contact@sup-connexion.com', 'SupConnexion')->subject('Activation de compte utilisateur')->view('mail.signup-email', ['mail_data' => $this->inter]);
    }
}
