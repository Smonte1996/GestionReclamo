<?php

namespace App\Http\Livewire\Guest;

use App\Mail\notificacionRespuestacliente;
use App\Models\Calificacion;
use App\Models\Solicitude;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EncuentaCliente extends Component
{
    public $General;
     public $Atencion;
     public $Rapidez;
     public $solucion;
     public $ob1;
     public $ob2;
     public $ob3;
     public $ob4;
     public $solicitude;
     public $solicitudes;

    //  protected $rules = [
    //     'General' => 'required',
    //     'Atencion' => 'required',
    //     'Rapidez' => 'required',
    //     'solucion' => 'required',
    //    ];

       public function mount($solicitude)
    {
        $calificacion = Solicitude::find(decrypt($solicitude));
        if (!empty($calificacion->encuesta->p1)) {
            abort(401);
        } else {
         $this->solicitude = decrypt($solicitude);
         }
    }

       public function saveData()
       {
   
           if (empty($this->General) || empty($this->Atencion) || empty($this->Rapidez) || empty($this->solucion)) {
            $this->emit('show-sweetalert',[
                'type' => 'warning',
                'title' => 'Todos los campos son Requerido',
                'message' => 'Por favor, Queremos saber tu opinion.'
            ]);
            return;
           }
   
           $notificacionEncuesta = Calificacion::create([
            'solicitude_id' => $this->solicitude,
            'p1' => $this->General,
            'ob1' => $this->ob1,
            'p2' => $this->Atencion,
            'ob2' => $this->ob2,
            'p3' => $this->Rapidez,
            'ob3' => $this->ob3,
            'p4' => $this->solucion,
            'ob4' => $this->ob4,
   
           ]);
   
           Mail::to(['EGananR@ransa.net','smontenegrot@ransa.net'])->send(new notificacionRespuestacliente($this->solicitude));
           
           return redirect()->route('reclamo.visita');
       }
   

    public function render()
    {
        return view('livewire.guest.encuenta-cliente')->layout('layouts.guest2');;
    }

}
