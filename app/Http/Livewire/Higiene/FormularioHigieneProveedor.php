<?php

namespace App\Http\Livewire\Higiene;

use App\Models\User;
use Livewire\Component;
use App\Mail\notificarProveedor;
use App\Models\Infor_practicahg;
use Illuminate\Support\Facades\DB;
use App\Models\Practica_proveedore;
use Illuminate\Support\Facades\Mail;

class FormularioHigieneProveedor extends Component
{

    public $Supervisores;
    public $supervisores;
    public $Proveedor;
    public $Personal;
    public $fecha;
    public $Evaluador;
    public $Almacen;
    public $Infor_ph;
    public $puc = '';
    public $puc1;
    public $puc2;
    public $puc3;
    public $pbl = '';
    public $pbl1;
    public $pbl2;
    public $pbl3;
    public $pcl = '';
    public $pcl1;
    public $pcl2;
    public $pcl3;
    public $pcp1;
    public $pcp2;
    public $pcp3;
    public $pcp = '';
    public $pna = '';
    public $pna1;
    public $pna2;
    public $pna3;
    public $pul = '';
    public $pul1;
    public $pul2;
    public $pul3;
    public $Practica_Provvedor;


    protected $rules =[
        'fecha'=> 'required',
        'Evaluador'=> 'required',
        'Almacen' => 'required',
    ];

    public function GuardarInfor()
    {
      $datos = $this->validate();

      $this->Infor_ph = Infor_practicahg::create([
      'fecha' => $datos['fecha'],
      'solicitud' => 'Proveedor',
      'evaluador' => $datos['Evaluador'],
       'almacen' => $datos['Almacen'],
        'estado' => 1
    ]);
    }

    function CumpleTodo()
    {
        $this->puc = 2;
        $this->pbl = 2;
        $this->pcl = 2;
        $this->pcp = 2;
        $this->pna = 2;
        $this->pul = 2;
    }

    function GuardarProveedor()
    {
        $dato2 = $this->validate([
            'Supervisores' => 'required',
            'Personal' => 'required',
            'Proveedor' => 'required',
            'puc' => 'required',
            'puc1'=>  'required_if:puc,0,1|nullable',
            'puc2'=>  'required_if:puc,0,1|nullable',
            'pbl'=> 'required',
            'pbl1'=>  'required_if:pbl,0,1|nullable',
            'pbl2'=>  'required_if:pbl,0,1|nullable',
            'pcl'=> 'required',
            'pcl1'=>  'required_if:pcl,0,1|nullable',
            'pcl2'=>  'required_if:pcl,0,1|nullable',
            'pna'=> 'required',
            'pna1'=> 'required_if:pna,0,1|nullable',
            'pna2'=> 'required_if:pna,0,1|nullable',
            'pcp'=> 'required',
            'pcp1'=> 'required_if:pcp,0,1|nullable',
            'pcp2'=> 'required_if:pcp,0,1|nullable',
            'pul' => 'required',
            'pul1'=> 'required_if:pul,0,1|nullable',
            'pul2'=> 'required_if:pul,0,1|nullable',
           ]);

        $this->Practica_Provvedor = Practica_proveedore::create([
            'infor_practicahg_id' => $this->Infor_ph->id,
            'supervisor'=> $dato2['Supervisores'],
            'personal' => $dato2['Personal'],
            'proveedor' => $dato2['Proveedor'],
            'puc' => $dato2['puc' ],
            'puc1' => $dato2['puc1'],
            'puc2' => $dato2['puc2'],
            'pbl' => $dato2['pbl' ],
            'pbl1'=> $dato2['pbl1'],
            'pbl2'=> $dato2['pbl2'],
            'pcl' => $dato2['pcl' ],
            'pcl1'=> $dato2['pcl1'],
            'pcl2'=> $dato2['pcl2'],
            'pna' => $dato2['pna' ],
            'pna1'=> $dato2['pna1'],
            'pna2'=> $dato2['pna2'],
            'pcp' => $dato2['pcp' ],
            'pcp1'=> $dato2['pcp1'],
            'pcp2'=> $dato2['pcp2'],
            'pul' => $dato2['pul' ],
            'pul1'=> $dato2['pul1'],
            'pul2'=> $dato2['pul2'],
        ]);

        if ($dato2['puc'] + $dato2['pbl'] + $dato2['pcl'] + $dato2['pna'] + $dato2['pcp'] + $dato2['pul'] < 12) {
            $hgsr = DB::table('infor_practicahgs')
            ->where('id', $this->Infor_ph->id)
            ->update(['Estatus_tarea' => 1]);
        }

        $this->reset('Personal','puc','puc1','puc2','pbl','pbl1','pbl2','pcl','pcl1','pcl2','pna','pna1','pna2','pcp','pcp1','pcp2','pul','pul1','pul2');
    }

    function mount()
    {
        $this->supervisores = User::with('Employee')->whereHas('Employee', function($query){
            $query->WhereIn('position_id', [5])->where('warehouse_id', 1);
         })->get();
    }

    function Enviar()
    {
        $hgs = DB::table('infor_practicahgs')
       ->where('id', $this->Infor_ph->id)
       ->update(['estado' => 2]);


       $this->emit('alert','Muchas gracias, el correo te llegara en cual quiere momento.');

       if ($this->Infor_ph->almacen == "Bodega Gye") {
        switch ($this->Practica_Provvedor->supervisor) {
            case 'Magaly Marlene Guzman':
                Mail::to('MGuzmanQ@ransa.net')->cc(['EGananR@ransa.net','wfuentesb@ransa.net','smontenegrot@ransa.net'])->send(new notificarProveedor($this->Infor_ph));
                break;

            default:
               Mail::to(['plozano@rubasa.com.ec','a-montesabel@hotmail.es'])->cc(['wfuentesb@ransa.net','smontenegrot@ransa.net','EGananR@ransa.net'])->send(new notificarProveedor($this->Infor_ph));
                break;
          }
       } else {
        switch ($this->Practica_Provvedor->supervisor) {
            case 'Lenin Jeison Itaz Chango':
                Mail::to(['litazc@ransa.net'])->cc(['wfuentesb@ransa.net','smontenegrot@ransa.net','EGananR@ransa.net','ksinalina@ransa.net'])->send(new notificarProveedor($this->Infor_ph));
                break;

            default:
                Mail::to(['plozano@rubasa.com.ec'])->cc(['wfuentesb@ransa.net','smontenegrot@ransa.net','EGananR@ransa.net'])->send(new notificarProveedor($this->Infor_ph));
                break;
          }
       }

        return redirect()->route('adm.practica.Proveedor');

    }

    public function render()
    {
        return view('livewire.higiene.formulario-higiene-proveedor');
    }
}
