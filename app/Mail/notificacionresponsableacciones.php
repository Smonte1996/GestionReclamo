<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Solicitude;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacionresponsableacciones extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionI;
      public $solicitud;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //
        $this->notificacionI = $solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionI->id);
        $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);

        $email =  $this->markdown('mail.notificacionresponsableacciones')->subject("ATENCIÓN AL {$nombreReclamo}");

        return $email;
    }
}
