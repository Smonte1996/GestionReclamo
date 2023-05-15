<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Solicitude;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacionNoProcede extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionNP;
     public $solicitud;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //
        $this->notificacionNP = $solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionNP->id);
        $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);
        $email =  $this->markdown('mail.notificacionresnoProcede')->subject("ATENCIÓN AL {$nombreReclamo}");

        return $email;
    }
}
