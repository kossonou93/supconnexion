<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SignupEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $ecole;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ecole)
    {
        $this->ecole = $ecole;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.ecole-email');
        //return $this->from('contact@sup-connexion.com', 'SupConnexion')->subject('Activation de compte utilisateur')->view('mail.ecole-email', ['mail_data' => $this->signup_mail_data]);
    }
}
