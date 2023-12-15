<?php

namespace App\Mail;

use PDF;
use App\Models\Practicahg;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Infor_practicahg;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class notificarRansa extends Mailable
{
    use Queueable, SerializesModels;

    public $PersonalRansa;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Infor_pg)
    {
        //
        $this->PersonalRansa = $Infor_pg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $pdfi = Infor_practicahg::find($this->PersonalRansa->id);

         $id = $pdfi->id;

         $pdfm = Practicahg::where('infor_practicahg_id', $id)->get();
         
         foreach ($pdfm as $pdfa) {
           $supervisor = $pdfa->Supervisores->name;
           // $Responsable = array_unique($supervisor);
         }
 
         function Total_supervisores($id)
         {
           $Porcentajes = 0;
           $Puntacion = Practicahg::where('infor_practicahg_id', $id)->get();
 
           foreach ($Puntacion as $total) {
             $totales = $total->uc + $total->bl + $total->cl + $total->cp + $total->na + $total->ul;
             // $Porcentajes += ($totales*100/12);
 
                 $Porcentajes += ($totales*100/12);
           }
 
           if (count($Puntacion)>0) {
             $Porcentajes/= count($Puntacion);
             }
 
           return $Porcentajes;
         }
 
          $Todos = Total_supervisores($id);
 
         $pdfs = PDF::loadView('pdf.Practicashg', compact('pdfi','pdfm','supervisor', 'Todos'));

        $email = $this->markdown('mail.notificarRansa')->subject('Verificación de prácticas higiénicas personal Ransa');//.strtoupper($this->PracticasProveedor->solicitud));
        $email->attachData($pdfs->setPaper('a4','landscape')->output(), "Practicas Higiene {$pdfi->fecha}.pdf");
        return $email;

    }
}
