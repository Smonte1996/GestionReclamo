<?php

namespace App\Http\Livewire\Reclamo;

use App\Mail\notificacionReapertura;
use App\Mail\notificacionReaperturaResponsable;
use App\Models\Accion;
use Livewire\Component;
use App\Models\Solicitude;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InfoAcciones extends Component
{
    public $solicitude;
    public $clasificacion;
    public $investigacion;
    public $acciones;

    protected $listeners = ['Reapertura'];

    // El select de todo las solicitudes.
    public function mount($solicitude)
    {
    $this->solicitude = Solicitude::find($solicitude);
    }

    // la funcion para la reapertutra del caso es segun el cumplimiento.
    public function Reapertura($solicitude)
    {
         $Investigacion = solicitude::find($solicitude);
         if ($Investigacion) {
             $Investigacion->investigacion->delete();
         }
        //  if ($Investigacion) {
        //      $Investigacion->encuesta->delete();
        //  }
        $Investigacion = Accion::where('solicitude_id', $solicitude)->delete();
        
        $affected = DB::table('solicitudes')
       ->where('id', $this->solicitude->id)
       ->update(['estado' => 2]);

        Mail::to([$this->solicitude->clasificacion->users->email,'smontenegrot@ransa.net',"EGananR@ransa.net"])->send(New notificacionReaperturaResponsable($this->solicitude));
        Mail::to([$this->solicitude->correo])->cc(["EGananR@ransa.net", "smontenegrot@ransa.net"])->send(new notificacionReapertura($this->solicitude));
     
       redirect()->route('adm.reclamo');

    }

    public function render()
    {
        return view('livewire.reclamo.info-acciones');
    }
}
