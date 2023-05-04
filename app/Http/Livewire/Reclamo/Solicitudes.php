<?php

namespace App\Http\Livewire\Reclamo;

use Livewire\Component;
use App\Models\Solicitude;

class Solicitudes extends Component
{   
    // Se hace la consulta de todo los datos de solicitudes para que se muestre en la vista.
    public function render()
    {
        $solicitudes = Solicitude::all();
        return view('livewire.reclamo.solicitudes', compact('solicitudes'));
    }
    
    public function download($id)
     {
         $registro = Solicitude::find($id);
         
             if (!$registro->investigacion->archivo) {
                  return;
              }
                 $archivo = $registro->investigacion->archivo;

            return response()->download(storage_path('app/public/Reclamos/Analisis/'.trim($archivo)));
    }

}
