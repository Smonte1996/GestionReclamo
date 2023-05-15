<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Solicitude;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacioncierreaccion extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitud;
    public $notificacionRc;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //
        $this->notificacionRc = $solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionRc->id);
         $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);
         $email =  $this->markdown('mail.notificacioncierre')->subject("ATENCIÓN AL {$nombreReclamo}");

         return $email;
    }
}
