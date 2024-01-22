<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Infor_practicahg;
use App\Models\Practica_proveedore;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

class notificarProveedor extends Mailable
{
    use Queueable, SerializesModels;

    public $PracticasProveedor;
    public $nombre3;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Infor_ph)
    {
        //
        $this->PracticasProveedor = $Infor_ph;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $PDFPROVEEDOR = Infor_practicahg::find($this->PracticasProveedor->id);
        $id = $PDFPROVEEDOR->id;
        $PDFsupervisor = Practica_proveedore::where('infor_practicahg_id', $this->PracticasProveedor->id)->get();
        foreach ($PDFsupervisor as $PDFRESPONSABLES) {
         $nombre  = $PDFRESPONSABLES->supervisor;
         $this->nombre3 = $PDFRESPONSABLES->supervisor;
        }
      //    dd($PDFRESPONSABLE);
         function EvaluacionSupervisores($id)
         {
          $PORCENTAJE = 0;
          $punto = Practica_proveedore::where('infor_practicahg_id', $id)->get();

          foreach ($punto as $Puntos) {
              $total = $Puntos->puc + $Puntos->pbl + $Puntos->pcl + $Puntos->pcp + $Puntos->pna + $Puntos->pul;

                    $PORCENTAJE += ($total*100/12);
                  }
                    if (count($punto)>0) {
                      $PORCENTAJE/= count($punto);
                      }

            return $PORCENTAJE;
         }

         $Procentaje_Total = EvaluacionSupervisores($id);

        $pdfs = PDF::loadView('pdf.PracticasProveedor', compact('PDFPROVEEDOR', 'PDFsupervisor', 'nombre', 'Procentaje_Total'));

        $email = $this->markdown('mail.notificarProveedor')->subject('Verificación de prácticas higiénicas Proveedor');

        $email->attachData($pdfs->setPaper('a4','landscape')->output(), "Practicas Higiene {$PDFPROVEEDOR->fecha}.pdf");

        return $email;
    }
}
