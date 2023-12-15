<?php

namespace App\Http\Livewire\Reclamo;

use Livewire\Component;
use App\Models\Solicitude;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Evidencia_solicitude;
use App\Mail\notificacioncierreaccion;

class Confirmaracciones extends Component
{
    //Este metodo sirve para guardar las images y crear la carpetas en la ruta definida.
    use WithFileUploads;
    
    // Se define la variables que se va usar por eso se la pone publica.
    public $solicitude;
    public $evaluacion_check ;
    public $accion_check ;
    public $observacion;
    public $imagen;
    public $errorMessage;

    // protected $rules = [
    //  'accion_check' => 'required',
    //  'imagen'=> 'max:3024'
    // ];

    // Aqui donde se una consulta y se montrara un sola vez y se valida si el id ya se lleno para que no haiga duplicado.
    public function mount($solicitude)
    {
          $solicitud = Solicitude::find($solicitude);
       if (!empty($solicitud->investigacion->date_check)) {
         abort(401);
     } else {
        $this->solicitude = Solicitude::find($solicitude);
        }
    }

    //Esta es la funcion para registar del cierre de acciones hace la validacion se define la ruta de la imagen en donde va ser guardada despues de guardar se envia el correo al cliente del cierre de caso.
    public function confirmarchekcData()
    {
      
      if (empty($this->evaluacion_check) || empty($this->observacion) || empty($this->accion_check)) {
        $this->emit('show-sweetalert',[
          'type' => 'warning',
          'title' => 'Todos los campos son obligatorio',
          'message' => 'Por favor, llenar todo los campos.'
      ]);
      return;
    }

         if (!is_null($this->imagen)) {
           foreach ($this->imagen as $image) {
           $image->store('public/Evidencia'); 
           $imagen_guardar = Evidencia_solicitude::create([
           'solicitude_id' => $this->solicitude->id,
           'name' => $image->hashName(),
       ]);
     }   
     }

      $notificaraccione = DB::table('investigacions')
         ->where('solicitude_id', $this->solicitude->id)
         ->update([
         'cumplimiento' => $this->evaluacion_check,
         'date_check' => now(),
         'observacion' => $this->observacion,]);  

      $notificaracciones = DB::table('accions')
      ->where('solicitude_id', $this->solicitude->id)
      ->update(['date_check' => $this->accion_check ? now():null,]);

      $affected = DB::table('solicitudes')
       ->where('id', $this->solicitude->id)
       ->update(['estado' => 4]);

       Mail::to([$this->solicitude->correo])->cc(["EGananR@ransa.net", "smontenegrot@ransa.net"])->send(new notificacioncierreaccion($this->solicitude));

      return redirect()->route('adm.dashboard');
    }

    public function render()
    {
        return view('livewire.reclamo.confirmaracciones');
    }
}
