<?php

namespace App\Mail;

use App\Models\Solicitude;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacionresponsable extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionCR;
    public $solicitud;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //
        $this->notificacionCR = $solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionCR->id);
        $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);

        $email =  $this->markdown('mail.notificacionresponsable')->subject("ATENCIÓN AL {$nombreReclamo}");

        return $email;
    }
}
