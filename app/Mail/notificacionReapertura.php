<?php

namespace App\Mail;

use App\Models\Solicitude;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacionReapertura extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionR;
    public $solicitud;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($solicitude)
    {
        //
        $this->notificacionR = $solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->solicitud = Solicitude::find($this->notificacionR->id);
        $nombreReclamo = strtoupper($this->solicitud->tipo_reclamo->name);
        $email =  $this->markdown('mail.notificacionReapertura')->subject("ATENCIÓN AL {$nombreReclamo}");

        return $email;
    }
}
