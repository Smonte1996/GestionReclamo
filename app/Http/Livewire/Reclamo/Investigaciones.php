<?php

namespace App\Http\Livewire\Reclamo;

use App\Mail\notificacionactividades;
use App\Mail\notificacioninvestigacion;
use App\Mail\notificacionresponsableacciones;
use App\Models\User;
use App\Models\Accion;
use Livewire\Component;
use App\Models\Solicitude;
use App\Models\Clasificacion;
use App\Models\Investigacion;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Investigaciones extends Component
{
    // Este metodo sirve para guardar las images y crear la carpetas en la ruta definida.
    use WithFileUploads;


    public $inputs =[
        [
        'acciones' => '',
         'responsable' => '',
         'fecha_programada' => '',
         ]
    ];

    // Se define la variables que se va usar por eso se la pone publica.
    public $fieldsCount = 1;
    public $users;
    public $correccion;
    public $causa_raiz;
    public $clasificacion;
    public $evaluacion;
    public $Responsable;
    public $fechaprog;
    public $archivo;
    public $solicitude;
    public $supervisores;
    
     // Aqui se hace la validacion de los campos declarado.
    protected $rules = [
     'correccion'=> 'required',
     'causa_raiz' => 'required',
     'evaluacion' => 'required',
     'Responsable' => 'required',
     'fechaprog' => 'required',
     'archivo' => 'required|max:3024|mimes:xlsx, xls', 

    ];    
 // Aqui donde se una consulta y se montrara un sola vez y se valida si el id ya se lleno para que no haiga duplicado.
    public function mount($solicitud)
    {   
            $Investigacion = Solicitude::find($solicitud);
        if (!empty($Investigacion->investigacion->solicitude_id)) {
            abort(401);
        } else {
        $this->users = User::with('Employee')->whereHas('Employee', function($query){
            $query->WhereIn('position_id', [5,14,15,16,17,18]);  
         })->get(); //Una consulta a la tabla de users y se asocia con el employee para hacer el filtro por cargo.
        $this->supervisores = User::with('Employee')->whereHas('Employee', function($query){
            $query->WhereIn('position_id', [4, 9, 19]);  
         })->get(); //Una consulta a la tabla de users y se asocia con el employee para hacer el filtro por cargo.
        $this->clasificacion = $solicitud;
        $this->solicitude = Solicitude::find($solicitud);
        }
    }
    // para agregar campos para los planes acciones.
    public function addField()
    {
        
        $this->inputs[] = 
        [
            'acciones' => '',
             'responsable' => '',
             'fecha_programada' => '',
        ];
    }

    //Es para remover los campos agregado.
    public function removeField($index)
    {
        unset($this->inputs[$index]);
        
    }

    //Esta es la funcion para registar la clasificacion hace la validacion despues de guardar los datos se hace un update para cambiar de estado se envia el correo al cliente del registro y al responsable asignado.
    public function ResgistroAnalisis()
    {
        $datos = $this->validate();
        // $validatedData = $this->validate([
        //     'inputs.*.acciones' => 'required',
        //     'inputs.*.responsable' => 'required',
        //     'inputs.*.fecha_programada' => 'required',
        // ]);

         $archivo = $this->archivo->store('public/Reclamos/Analisis');
         $datos['archivo'] = str_replace('public/Reclamos/Analisis/', ' ', $archivo);

         $notificacionInvestigacion = Investigacion::create([
         'solicitude_id' => $this->clasificacion, 
         'user_id'=> $datos['Responsable'],
         'correccion'=> $datos['correccion'],
         'causa_raiz' =>$datos['causa_raiz'],
         'evaluacion_eficacia' => $datos['evaluacion'],
         'fecha_programada' => $datos['fechaprog'],
         'archivo' => $datos['archivo'],
         'codigo_generado' => $this->solicitude->codigo_generado,
        ]);
          foreach ($this->inputs as $input) { 
         $notificacionAcciones = Accion::create([
          'solicitude_id' => $this->clasificacion,
          'name' => $input['acciones'],
          'user_id' => $input['responsable'],
          'fecha_programacion' => $input['fecha_programada'],
         ]);
         }
         $affected = DB::table('solicitudes')
         ->where('id', $this->clasificacion)
         ->update(['estado' => 3]);

         
          Mail::to([$this->solicitude->correo,"EGananR@ransa.net", "WFuentesB@ransa.net", "smontenegrot@ransa.net"])->send(New notificacioninvestigacion($this->solicitude));
          Mail::to([$this->solicitude->investigacion->user->email ,"smontenegrot@ransa.net"])->send(new notificacionresponsableacciones($this->solicitude));
          foreach ($this->solicitude->acciones as $accion ) {
             Mail::to([$accion->userse->email ,"smontenegrot@ransa.net"])->send(new notificacionactividades($this->solicitude));
          }
        
         redirect()->route('adm.dashboard');
    
    }

    public function render()
    {
        return view('livewire.reclamo.investigaciones');
    }
}
