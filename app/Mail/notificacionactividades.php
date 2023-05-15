<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Solicitude;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacionactividades extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionA;
    public $solicitud;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //
        $this->notificacionA = $solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionA->id);
        $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);

        $emails =  $this->markdown('mail.notificacionActividades')->subject("ATENCIÓN AL {$nombreReclamo}");

        return $emails;
    }
}
