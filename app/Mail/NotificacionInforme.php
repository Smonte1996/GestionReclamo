<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Models\Muestreo;
use App\Models\Evidencia_muestreo;
use PDF;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NotificacionInforme extends Mailable
{
    use Queueable, SerializesModels;

    public $Mustreo;
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Muestreos)
    {
        //
        $this->Mustreo = $Muestreos;
    }

    public function build()
    {
        $pdf = Muestreo::find($this->Mustreo->id);
        
        $pdfs = PDF::loadView('pdf.informeHorizontal', compact('pdf'));

        // foreach ($pdf->Defecto as $Defectos) {
        // $consultas = $Defectos->data_logistica_id;
        // }
        // $consulta = Evidencia_muestreo::where('data_logistica_id', $consultas)->get();

        $pdfv = PDF::loadView('pdf.informeVertical', compact('pdf'));

       $email = $this->markdown('mail.notificacionInforme')->subject('Recepción '.strtoupper($this->Mustreo->contenedor));
      
       $email->attachData($pdfs->setPaper('a4','landscape')->output(),"Reporte {$pdf->contenedor}.pdf");

       $email->attachData($pdfv->output(),strtoupper("Reporte Transporte $pdf->contenedor.pdf"));

       return $email; 
    }
}
