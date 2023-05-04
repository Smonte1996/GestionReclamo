<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Solicitude;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notificacionRegistro extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacionR;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Solicitude $Solicitude)
    {
        //
        $this->notificacionR = $Solicitude;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email =  $this->markdown('mail.notificacionregistro')->subject('ATENCIÓN AL ' .strtoupper($this->notificacionR->tipo_reclamo->name));

        return $email;
    }
}
