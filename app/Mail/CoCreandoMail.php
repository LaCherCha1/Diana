<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CoCreandoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $payer;
   


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($payer)
    {
        //
        $this->payer = $payer;
    }    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.creando')
        ->subject('Co-Creando Mi Mejor Año')
        ->attachFromStorage('pdf/Co-creando mi mejor año.pdf');
    }
}
