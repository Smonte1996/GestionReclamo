<?php

namespace App\Http\Livewire\Reclamo;

use App\Models\Solicitude;
use Livewire\Component;

class InfnoProcede extends Component
{
    
    public $solicitude;

    protected $listeners = ['ReaperturaNoProcede'];

    public function render()
    {
        return view('livewire.reclamo.infno-procede');
    }
     
    // El select de todo las solicitudes.
    public function mount($solicitude)
    {
        $this->solicitude = Solicitude::find($solicitude);
    }

    // la funcion para la reapertutra del caso es segun el cumplimiento.
    public function ReaperturaNoProcede($solicitude)
    {
        $Investigacion = Solicitude::find($solicitude);
         if ($Investigacion) {
             $Investigacion->investigacion->delete();
         }
        //  if ($Investigacion) {
        //      $Investigacion->encuesta->delete();
        //  }

         $affected = DB::table('solicitudes')
       ->where('id', $this->solicitude->id)
       ->update(['estado' => 2]);

       Mail::to([$this->solicitude->clasificacion->users->email,'smontenegrot@ransa.net'])->send(New notificacionReaperturaResponsable($this->solicitude));
       Mail::to([$this->solicitude->correo ,"EGananR@ransa.net", "WFuentesB@ransa.net", "smontenegrot@ransa.net"])->send(new notificacionReapertura($this->solicitude));

       redirect()->route('adm.reclamo');
    }
}
