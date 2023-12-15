<?php

namespace App\Http\Livewire\Reclamo;

use Livewire\Component;
use App\Models\Solicitude;
use PDF;

class Solicitudes extends Component
{   
    // public $estado;


    // Se hace la consulta de todo los datos de solicitudes para que se muestre en la vista.
    public function render() 
    {
        // if (empty($this->estado)) {
        //     $solicitudes = Solicitude::where('estado', $this->estado)->get();  
        //    }else{
        //    $solicitudes = Solicitude::where('estado', $this->estado)->get(); 
        // //    dd($this->estado);  
        //    }
        $solicitudes = Solicitude::all()->whereIn('estado', [1,2,3,4,5]);
        return view('livewire.reclamo.solicitudes', compact('solicitudes'));
    }

    public function ReclamoPdf($id)
    {
        $Solicitudes = Solicitude::find($id);
        
        $pdfs = PDF::loadView('pdf.informe_pdf', compact('Solicitudes'));
        
        return $pdfs->stream("$Solicitudes->codigo_generado.pdf");
    }

}
