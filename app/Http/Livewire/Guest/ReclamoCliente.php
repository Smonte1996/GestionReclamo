<?php

namespace App\Http\Livewire\Guest;

use App\Models\Sede;
use Livewire\Component;
use App\Models\Solicitude;
use App\Models\Tipo_reclamo;
use Livewire\WithFileUploads;
use App\Models\Servicio_ransa;
use App\Mail\notificacionRegistro;
use App\Models\Adicional;
use Illuminate\Support\Facades\Mail;

class ReclamoCliente extends Component
{
   // Este metodo sirve para guardar las images y crear la carpetas en la ruta definida.
    use WithFileUploads;

    // Se define la variables que se va usar por eso se la pone publica.
    public $Nombres;
    public $email;
    public $celular;
    public $Empresa;
    public $sede;
    public $tipo;
    public $servicio = null;
    public $fecha;
    public $descripcion;
    public $imagen;
    public $codigo;
    public $estado;
    public $sub_servicio = null;
    public $titulo;
    public $adicionals = null;
    public $tipos;
    public $servicios;
    public $sedes;

    // Aqui se hace la validacion de los campos declarado.
    protected $rules = [
    'Nombres' => ['required', 'max:60', 'regex:/^[\pL\s]+$/u'],
    'email' => ['required', 'email','max:50'],
    'celular' => ['required', 'numeric'],
    'Empresa' => ['required', 'regex:/^[\pL\s]+$/u'],
    'sede' => 'required',
    'tipo' => 'required',
    'sub_servicio' => 'required',
    'servicio' => 'required',
    'fecha' => ['required', 'date'],
    'descripcion' => ['required', 'regex:/^(?=.*[a-zA-Z])(?=[^{}[\]+*]+$)/'],
    'titulo' => ['required', 'regex:/^(?=.*[a-zA-Z])(?=[^{}[\]+*]+$)/'],
    'imagen' => ['nullable','max:3024','image','mimes:jpeg,png,jpg']
    ];

    // Aqui donde se una consulta y se montrara un sola vez.
    public function mount()
    {
          $this->servicios = Servicio_ransa::all();
          $this->tipos = Tipo_reclamo::all();
          $this->sedes = Sede::all();
    }

    // Aqui en el select dinamico.
    public function updatedservicio($servicio_ransa_id)
    {
       $this->adicionals = Adicional::where('servicio_ransa_id', $servicio_ransa_id)->get();
    }
    
    //Esta es la funcion para registar el reclamo hace la validacion se define la ruta de la imagen en donde va ser guardada despues de guardar se envia el correo al cliente del registro.
    public function RegistarReclamo()
    {
          $datos = $this->validate();

        if (!is_null($this->imagen)) {
        $imagen = $this->imagen->store('public/Reclamos');
        $datos['imagen'] = str_replace('public/Reclamos/',' ', $imagen);
        }

         function codigos(){
         $strengt = 4;
         $codigo = '0123456789aqwertyuiopsdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
         $input_length = strlen($codigo);
         $random_string = 'Rq';
        for ($i=0; $i < $strengt ; $i++) { 
              $random_character = $codigo[mt_rand(0, $input_length - 1)];
              $random_string .= $random_character;
        }
        return $random_string;
         }

        $codigo = codigos();

      $notificacionregistro = Solicitude::create([
            'nombre' => $datos['Nombres'],
            'correo' => $datos['email'],
            'celular' => $datos['celular'],
            'cliente' => $datos['Empresa'],
            'sede_id' => $datos['sede'],
            'tipo_reclamo_id' => $datos['tipo'],
            'servicio_ransa_id' => $datos['servicio'],
            'adicional_id' => $datos['sub_servicio'],
            'codigo_generado' => $codigo,
            'Descripcion' => $datos['descripcion'],
            'titulo' => $datos['titulo'],
            'estado' => 1,
            'fecha_registro' => $datos['fecha'],
            'imagen' => $datos['imagen'],
        ]);

         Mail::to([$this->email , "EGananR@ransa.net", "WFuentesB@ransa.net", "smontenegrot@ransa.net"])->send(new notificacionRegistro($notificacionregistro));

        $this->reset(['Nombres','email','celular','Empresa','sede','tipo','servicio','sub_servicio','descripcion','titulo','fecha','imagen']);

        $this->emitTo('Reclamo','render');

        $this->emit('alert','Muchas gracias, nuestro equipo ya recibió tu solicitud. Pronto te enviaremos una respuesta');

        session()->flash('mensaje', ' ');

         redirect()->back();
    } 

    // Es la rendiracion del formulario.
    public function render()
    {
        return view('livewire.guest.reclamo-cliente')->layout('layouts.guest2');;
    }
}
