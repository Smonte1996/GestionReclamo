<?php

namespace App\Http\Livewire\Higiene;

use App\Models\User;
use Livewire\Component;
use App\Models\Employee;
use App\Models\Practicahg;
use App\Mail\notificarRansa;
use App\Models\Infor_practicahg;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormularioHigiene extends Component
{
    public $fecha;
    public $evaluador;
    public $almacen;
    public $Personal;
    public $Supervisor;
    public $supervisores;
    public $personal;
    public $uc = '';
    public $uc1;
    public $uc2;
    public $uc3;
    public $bl = '';
    public $bl1;
    public $bl2;
    public $bl3;
    public $cl = '';
    public $cl1;
    public $cl2;
    public $cl3;
    public $cp1;
    public $cp2;
    public $cp3;
    public $cp = '';
    public $na = '';
    public $na1;
    public $na2;
    public $na3;
    public  $ul = '';
    public  $ul1;
    public  $ul2;
    public  $ul3;
    public $Infor_ph;
    public $Practicashg;
    public $personalUIO;
    public $supervisoresUio;
    public $correos;

    protected $rules =[
        'fecha'=> 'required',
        'evaluador'=> 'required',
        'almacen' => 'required',
    ];

    public function Guardar()
    {
      $datos = $this->validate();

      $this->Infor_ph = Infor_practicahg::create([
      'fecha' => $datos['fecha'],
      'solicitud' => 'Ransa',
      'evaluador' => $datos['evaluador'],
       'almacen' => $datos['almacen'],
        'estado' => 1
    ]);
    }

    function Enviar()
    {
        $hgs = DB::table('infor_practicahgs')
       ->where('id', $this->Infor_ph->id)
       ->update(['estado' => 2]);

       $this->emit('alert','Muchas gracias, el correo te llegara en cual quiere momento.');

    
           $correosuper = Practicahg::where('infor_practicahg_id', $this->Infor_ph->id)->get();
           foreach ($correosuper as $supervis) {
               $this->correos[] = $supervis->Supervisores->email;
           }
           Mail::to(array_unique($this->correos))->cc(['egananr@ransa.net','wfuentesb@ransa.net'])->send(new notificarRansa($this->Infor_ph));
       
       // dd(array_unique($this->correos));

       return redirect()->route('adm.practica.higiene');
    }

     function ValidacionPH()

    {
        $dato1 = $this->validate([
         'Supervisor' => 'required',
         'Personal' => 'required',
         'uc' => 'required',
         'uc1'=>  'required_if:uc,0,1|nullable',
         'uc2'=>  'required_if:uc,0,1|nullable',
         'bl'=> 'required',
         'bl1'=>  'required_if:bl,0,1|nullable',
         'bl2'=>  'required_if:bl,0,1|nullable',
         'cl'=> 'required',
         'cl1'=>  'required_if:cl,0,1|nullable',
         'cl2'=>  'required_if:cl,0,1|nullable',
         'na'=> 'required',
         'na1'=> 'required_if:na,0,1|nullable',
         'na2'=> 'required_if:na,0,1|nullable',
         'cp'=> 'required',
         'cp1'=> 'required_if:cp,0,1|nullable',
         'cp2'=> 'required_if:cp,0,1|nullable',
         'ul' => 'required',
         'ul1'=> 'required_if:ul,0,1|nullable',
         'ul2'=> 'required_if:ul,0,1|nullable',
        ]);

        $this->Practicashg = Practicahg::create([
        'infor_practicahg_id' => $this->Infor_ph->id,
        'user_id' =>  $dato1['Supervisor'],
        'employee_id' => $dato1['Personal'],
        'uc'   => $dato1['uc'],
        'uc1' => $dato1['uc1'],
        'uc2' => $dato1['uc2'],
        'bl' => $dato1['bl'],
        'bl1' => $dato1['bl1'],
        'bl2' => $dato1['bl2'],
        'cl' => $dato1['cl'],
        'cl1' => $dato1['cl1'],
        'cl2' => $dato1['cl2'],
        'na' => $dato1['na'],
        'na1' => $dato1['na1'],
        'na2' => $dato1['na2'],
        'cp' => $dato1['cp'],
        'cp1' => $dato1['cp1'],
        'cp2' => $dato1['cp2'],
        'ul' => $dato1['ul'],
        'ul1'=> $dato1['ul1'],
        'ul2'=> $dato1['ul2'],
        ]);

        $this->reset('Personal','uc','uc1','uc2','bl','bl1','bl2','cl','cl1','cl2','na','na1','na2','cp','cp1','cp2','ul','ul1','ul2');

    }

    // dd($fecha, $Evaluador, $Almacen);

    function mount()
    {
            $this->supervisoresUio = User::with('Employee')->whereHas('Employee', function($query){
                $query->WhereIn('position_id', [4])->where('warehouse_id', 2)->where('departament_id', 1);
                 })->get();
            $this->personalUIO = Employee::where('warehouse_id', 2)->where('departament_id', 1)->whereIn('position_id', [2,3,4])->get();

            $this->supervisores = User::with('Employee')->whereHas('Employee', function($query){
                $query->WhereIn('position_id', [4])->where('warehouse_id', 1)->where('departament_id', 1);
                })->get();
            $this->personal = Employee::where('warehouse_id', 1)->where('departament_id', 1)->whereIn('position_id', [2,3,4])->get();
    }


    public function render()
    {
        if (isset($this->Practicashg->id)){
            if ($this->Infor_ph->almacen == "Bodega Gye") {
                $excepto = Practicahg::where('infor_practicahg_id', $this->Infor_ph->id)->get();
           foreach ($excepto as $exceptos) {
             $consultas[] = $exceptos->employee_id;
            }

           $consulta = $consultas;

           $this->personal = DB::table('employees')->where('warehouse_id', 1)->WhereNotIn('id', $consulta)->where(function($query){ $query->whereIn('position_id', [2,3,4])->where('departament_id', 1);})->get();

            }if($this->Infor_ph->almacen == "Bodega Uio"){

            $exceptoUio = Practicahg::where('infor_practicahg_id', $this->Infor_ph->id)->get();
            foreach ($exceptoUio as $exceptos) {
              $consultas[] = $exceptos->employee_id;
             }

            $consultar = $consultas;

            $this->personalUIO = DB::table('employees')->where('warehouse_id', 2)->WhereNotIn('id', $consulta)->where(function($query){ $query->whereIn('position_id', [2,3,4])->where('departament_id', 1);})->get();

         }
        }
         $this->emit('select2');

        return view('livewire.higiene.formulario-higiene');
    }
}
