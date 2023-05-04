<?php

namespace App\Http\Livewire\Reclamo;

use App\Mail\notificacionclasificacion;
use App\Mail\notificacionresponsable;
use App\Models\User;
use Livewire\Component;
use App\Models\Clasificacion;
use App\Models\Causal_general;
use App\Models\Detalle_causal;
use App\Models\Solicitude;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Clasificaciones extends Component
{

  // Se define la variables que se va usar por eso se la pone publica.
    public $detallegeneral = null;
    public $causalgeneral = null;    
    public $detalles = null;
    public $users;
    public $Generals;
    public $detalle_causal_id;
    public $Investigador;
    public $solicitude;
    
    // Aqui se hace la validacion de los campos declarado.
    protected $rules = [
        'Investigador' => 'required',
        'causalgeneral' => 'required',
        'detallegeneral' => 'required',
       ];

        // Aqui donde se una consulta y se montrara un sola vez y se valida si el id ya se lleno para que no haiga duplicado.
       public function mount($solicitude)
     {
      $clasificacion = Solicitude::find($solicitude);
      if (!empty($clasificacion->clasificacion->solicitude_id)) {
          abort(401);
      } else {       
        $this->users = User::with('Employee')->whereHas('Employee', function($query){
            $query->WhereIn('position_id', [5,14,15,16,17,18]);  
         })->get();  //Una consulta a la tabla de users y se asocia con el employee para hacer el filtro por cargo.
         $this->Generals = Causal_general::all();
        $this->solicitude = Solicitude::find($solicitude);
     }
    }

     // Aqui en el select dinamico.
     public function updatedcausalgeneral($causal_general_id)
      {
         $this->detalles = Detalle_causal::where('causal_general_id', $causal_general_id)->get();
      }

      //Esta es la funcion para registar la clasificacion hace la validacion despues de guardar los datos se hace un update para cambiar de estado se envia el correo al cliente del registro y al responsable asignado.
      public function registroclasificacion()
      {
        $datos = $this->validate();

     $notificacionclasificacion = Clasificacion::create([
       'solicitude_id' => $this->solicitude->id,
       'user_id' => $datos['Investigador'],
       'causal_general_id' => $datos['causalgeneral'],
       'detalle_causal_id' => $datos['detallegeneral'],
       'codigo_generado' => $this->solicitude->codigo_generado, 
       ]);
       $affected = DB::table('solicitudes')
       ->where('id', $this->solicitude->id)
       ->update(['estado' => 2]);

       Mail::to([$this->solicitude->clasificacion->users->email ,"smontenegrot@ransa.net"])->send(new notificacionresponsable($this->solicitude));
       Mail::to([$this->solicitude->correo ,"EGananR@ransa.net", "WFuentesB@ransa.net", "smontenegrot@ransa.net"])->send(new notificacionclasificacion($this->solicitude));

      redirect()->route('adm.reclamo');
     }

    public function render()
    {
        return view('livewire.reclamo.clasificaciones');
    }
}
