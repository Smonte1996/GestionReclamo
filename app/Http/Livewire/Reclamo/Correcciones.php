<?php

namespace App\Http\Livewire\Reclamo;

use Livewire\Component;
use App\Models\Solicitude;
use App\Models\Investigacion;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Evidencia_solicitude;
use App\Mail\notificacionNoProcede;

class Correcciones extends Component
{
    use WithFileUploads;

    public $solicitude;
    public $correccion;
    public $imagen;

    protected $rules = [
     
     'correccion' => 'required',  
     'imagen' => 'max:3024',

    ];

    public function mount($solicitud)
    {
         $Investigacion = Solicitude::find($solicitud);
         if (!empty($Investigacion->investigacion->solicitude_id)) {
             abort(401);
         } else {
        $this->solicitude = Solicitude::find($solicitud);
         }
    }

    public function RegistarCorrecion()
    {
        $datos = $this->validate();

        if (!is_null($this->imagen)) {
            foreach ($this->imagen as $image) {
            $image->store('public/Evidencia'); 
            $imagen_guardar = Evidencia_solicitude::create([
            'solicitude_id' => $this->solicitude->id,
            'name' => $image->hashName(),
        ]);
         }   
         }

        $notificacioncorreccion = Investigacion::create([
         'solicitude_id' => $this->solicitude->id,
         'codigo_generado' => $this->solicitude->codigo_generado,
         'correccion' => $datos['correccion'],
        ]); 

        $affected = DB::table('solicitudes')
         ->where('id', $this->solicitude->id)
         ->update(['estado' => 5]);
        
        Mail::to([$this->solicitude->correo])->cc(["EGananR@ransa.net", "smontenegrot@ransa.net"])->send(New notificacionNoProcede($this->solicitude));
        
        redirect()->route('adm.dashboard');
    }

    public function render()
    {
        return view('livewire.reclamo.correcciones');
    }
}
