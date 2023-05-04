<?php

namespace App\Http\Livewire\Reclamo;

use App\Mail\notificacionNoProcede;
use Livewire\Component;
use App\Models\Solicitude;
use App\Models\Investigacion;
use App\Models\Evidencia_solicitude;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InvestigacionNoProcede extends Component
{

    use WithFileUploads;

    public $clasificacion;
    public $solicitude;
    public $clasificaciones;
    public $argumento;
    // public $archivo;
    public $imagen;

    protected $rules = [
     'argumento' => 'required',
    //  'archivo' => 'required',
     'imagen' => 'max:3024',
    ];

    public function mount($clasificacion)
    {
        $Investigacion = Solicitude::find($clasificacion);
        if (!empty($Investigacion->investigacion->solicitude_id)) {
            abort(401);
        } else {
        $this->solicitude = Solicitude::find($clasificacion);
        }
    }

    public function Registarargumento()
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


        $notificacioninvestigacionnoprocede = Investigacion::create([
        'solicitude_id' => $this->solicitude->id,
        'codigo_generado' => $this->solicitude->codigo_generado,
        'argumento' => $datos['argumento'], 
        ]);

        $affected = DB::table('solicitudes')
         ->where('id', $this->solicitude->id)
         ->update(['estado' => 5]);
      
        Mail::to([$this->solicitude->correo, "EGananR@ransa.net", "WFuentesB@ransa.net", "smontenegrot@ransa.net"])->send(New notificacionNoProcede($this->solicitude));
         redirect()->route('adm.dashboard');

    }

    public function render()
    {
        return view('livewire.reclamo.investigacion-no-procede');
    }
}
