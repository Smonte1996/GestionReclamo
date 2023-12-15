<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Solicitude;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class notificacionFelicidades extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionF;
    public $solicitud;
     

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //

        $this->notificacionF = $solicitude;
    }

    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionF->id);
        //  dd($this->solicitud);
        $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);
        $email =  $this->markdown('mail.notificacionFelicidades')->subject("ATENCIÓN AL {$nombreReclamo}");

        return $email;
    }
}
