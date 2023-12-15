<?php

namespace App\Mail;

use PDF;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Infor_practicahg;
use App\Models\Practica_maquila;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class notificarMaquila extends Mailable
{
    use Queueable, SerializesModels;

    public $PracticaMaquila;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Infor_ph)
    {
        //
        $this->PracticaMaquila = $Infor_ph;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $PDFPROVEEDOR = Infor_practicahg::find($this->PracticaMaquila->id);
       $id = $PDFPROVEEDOR->id;
      $PDFresponsable = Practica_maquila::where('infor_practicahg_id', $id)->get();

      foreach ($PDFresponsable as $PDFRESPONSABLES) {
       $nombre  = $PDFRESPONSABLES->Supervisor;
      }


       function EvaluacionMaquila($id)
       {
        $PORCENTAJE = 0;
        $puntuacion = Practica_maquila::where('infor_practicahg_id', $id)->get();

        foreach ($puntuacion as $Puntos) {

            $total = $Puntos->muc + $Puntos->mbl + $Puntos->mcl + $Puntos->mcp + $Puntos->mna + $Puntos->mul + $Puntos->mnp + $Puntos->mml + $Puntos->mnaa + $Puntos->mub + $Puntos->mcb + $Puntos->mbe + $Puntos->mhg;
            //varaible concatenada de la consulta de la base.
            $total1 = $Puntos->muc . $Puntos->mbl . $Puntos->mcl . $Puntos->mcp . $Puntos->mna . $Puntos->mul . $Puntos->mnp . $Puntos->mml . $Puntos->mnaa . $Puntos->mub . $Puntos->mcb . $Puntos->mbe . $Puntos->mhg;
            //hace un conteo de las cantidades de cero que tengo.
            // dd($total1);
            $total2 = substr_count($total1, "0");
            //  dd($total2);
            //hago la resta de la cantidad de cero valor de campos.
            $cantidadFinal = 26-($total2*2);
            //se saca el porcentaje final.
             $PORCENTAJE += ($total*100/$cantidadFinal);
            }

            if (count($puntuacion)>0) {
             $PORCENTAJE/= count($puntuacion);
             }

          return $PORCENTAJE;
       }

       $Valor_total = EvaluacionMaquila($id);

       $pdfs = PDF::loadView('pdf.PracticasMaquila', compact('PDFPROVEEDOR', 'PDFresponsable', 'nombre', 'Valor_total'));

        $email = $this->markdown('mail.notificarMaquila')->subject('Verificación de prácticas higiénicas personal maquila');

        $email->attachData($pdfs->setPaper('a4','landscape')->output(), "Practicas Higiene {$PDFPROVEEDOR->fecha}.pdf");

        return $email;
    }
}
