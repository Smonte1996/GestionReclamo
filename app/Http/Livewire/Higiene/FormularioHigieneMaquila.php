<?php

namespace App\Http\Livewire\Higiene;

use Livewire\Component;
use App\Mail\notificarMaquila;
use App\Models\Infor_practicahg;
use App\Models\Practica_maquila;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FormularioHigieneMaquila extends Component
{

    public $Infor_ph;
    public $fecha;
    public $Evaluador;
    public $Almacen;
    public $Supervisor;
    public $Personal_Maquila;
    public $muc;
    public $muc1;
    public $muc2;
    public $mbl;
    public $mbl1;
    public $mbl2;
    public $mcl;
    public $mcl1;
    public $mcl2;
    public $mcp;
    public $mcp1;
    public $mcp2;
    public $mna =  null;
    public $mna1 = null;
    public $mna2 = null;
    public $mul;
    public $mul1;
    public $mul2;
    public $mnp;
    public $mnp1;
    public $mnp2;
    public $mml;
    public $mml1;
    public $mml2;
    public $mnaa;
    public $mnaa1;
    public $mnaa2;
    public $mub;
    public $mub1;
    public $mub2;
    public $mcb;
    public $mcb1;
    public $mcb2;
    public $mbe;
    public $mbe1;
    public $mbe2;
    public $mhg;
    public $mhg1;
    public $mhg2;
    public $Practicas_maquilas;
    public $textselect = null;
    public $Proveedor;
    public $Observa;

    protected $rules =[
        'fecha'=> 'required',
        'Evaluador'=> 'required',
        'Almacen' => 'required',
        'Proveedor' => 'required',
    ];

    public function Guardar_Infor()
    {
      $datos = $this->validate();

      $this->Infor_ph = Infor_practicahg::create([
      'fecha' => $datos['fecha'],
      'solicitud' => 'Maquila',
      'evaluador' => $datos['Evaluador'],
       'almacen' => $datos['Almacen'],
       'Proveedor'=> $datos['Proveedor'],
        'estado' => 1
    ]);
    }

    function SeleccionarValor()
    {
        $this->muc = 2;
        $this->mbl = 2;
        $this->mcl = 2;
        $this->mcp = 2;
        $this->mna = 2;
        $this->mul = 2;
        $this->mnp = 2;
        $this->mml = 2;
        $this->mnaa = 2;
        $this->mub = 2;
        $this->mcb = 2;
        $this->mbe = 2;
        $this->mhg = 2;
    }

   function GuardarMaquila()
   {
     $maquila = $this->validate([
        'Supervisor' => 'required',
        'Personal_Maquila' => 'required',
        'muc' => 'required',
        'muc1' => 'required_if:muc,1|nullable',
        'muc2'=> 'required_if:muc,1|nullable',
        'mbl'  => 'required',
        'mbl1'=> 'required_if:mbl,1|nullable',
        'mbl2'=> 'required_if:mbl,1|nullable',
        'mcl'=> 'required',
        'mcl1'=> 'required_if:mcl,1|nullable',
        'mcl2'=> 'required_if:mcl,1|nullable',
        'mcp'=> 'required',
        'mcp1'=> 'required_if:mcp,1|nullable',
        'mcp2'=> 'required_if:mcp,1|nullable',
        'mna'=> 'required',
        'mna1'=> 'required_if:mna,1|nullable',
        'mna2'=> 'required_if:mna,1|nullable',
        'mul'=> 'required',
        'mul1'=> 'required_if:mul,1|nullable',
        'mul2'=> 'required_if:mul,1|nullable',
        'mnp'=> 'required',
        'mnp1'=> 'required_if:mnp,1|nullable',
        'mnp2'=> 'required_if:mnp,1|nullable',
        'mml'=> 'required',
        'mml1'=> 'required_if:mml,1|nullable',
        'mml2'=> 'required_if:mml,1|nullable',
        'mnaa'=> 'required',
        'mnaa1'=> 'required_if:mnaa,1|nullable',
        'mnaa2'=> 'required_if:mnaa,1|nullable',
        'mub'=> 'required',
        'mub1'=> 'required_if:mub,1|nullable',
        'mub2'=> 'required_if:mub,1|nullable',
        'mcb'=> 'required',
        'mcb1'=> 'required_if:mcb,1|nullable',
        'mcb2'=> 'required_if:mcb,1|nullable',
        'mbe'=> 'required',
        'mbe1'=> 'required_if:mbe,1|nullable',
        'mbe2'=> 'required_if:mbe,1|nullable',
        'mhg'=> 'required',
        'mhg1'=> 'required_if:mhg,1|nullable',
        'mhg2'=> 'required_if:mhg,1|nullable',
      ]);

      $this->Practicas_maquilas = Practica_maquila::create([
        'infor_practicahg_id' => $this->Infor_ph->id,
        'personal' => $maquila['Personal_Maquila'],
        'Supervisor' => $maquila['Supervisor'],
        'muc' => $maquila['muc' ],
        'muc1' => $maquila['muc1'],
        'muc2'=> $maquila['muc2'],
        'mbl'=> $maquila['mbl'],
        'mbl1'=> $maquila['mbl1'],
        'mbl2'=> $maquila['mbl2'],
        'mcl'=> $maquila['mcl'],
        'mcl1'=> $maquila['mcl1'],
        'mcl2'=> $maquila['mcl2'],
        'mcp'=> $maquila['mcp'],
        'mcp1'=> $maquila['mcp1'],
        'mcp2'=> $maquila['mcp2'],
        'mna'=> $maquila['mna'],
        'mna1'=> $maquila['mna1'],
        'mna2'=> $maquila['mna2'],
        'mul'=> $maquila['mul'],
        'mul1'=> $maquila['mul1'],
        'mul2'=> $maquila['mul2'],
        'mnp'=> $maquila['mnp'],
        'mnp1'=> $maquila['mnp1'],
        'mnp2'=> $maquila['mnp2'],
        'mml'=> $maquila['mml'],
        'mml1'=> $maquila['mml1'],
        'mml2'=> $maquila['mml2'],
        'mnaa'=> $maquila['mnaa'],
        'mnaa1'=> $maquila['mnaa1'],
        'mnaa2'=> $maquila['mnaa2'],
        'mub'=> $maquila['mub'],
        'mub1'=> $maquila['mub1'],
        'mub2'=> $maquila['mub2'],
        'mcb'=> $maquila['mcb'],
        'mcb1'=> $maquila['mcb1'],
        'mcb2'=> $maquila['mcb2'],
        'mbe'=> $maquila['mbe'],
        'mbe1'=> $maquila['mbe1'],
        'mbe2'=> $maquila['mbe2'],
        'mhg'=> $maquila['mhg'],
        'mhg1'=> $maquila['mhg1'],
        'mhg2'=> $maquila['mhg2'],
        'observacion' => $this->Observa,
      ]);

      if ($maquila['muc'] == 1 || $maquila['mbl'] == 1 || $maquila['mcl'] == 1 || $maquila['mcp'] == 1 || $maquila['mna'] == 1 || $maquila['mul'] == 1 || $maquila['mnp'] == 1 || $maquila['mml'] == 1 || $maquila['mnaa'] == 1 || $maquila['mub'] == 1 || $maquila['mcb'] == 1 || $maquila['mbe'] == 1 || $maquila['mhg'] == 1) {
        $hgsr = DB::table('infor_practicahgs')
        ->where('id', $this->Infor_ph->id)
        ->update(['Estatus_tarea' => 1]);
    }

      $this->reset('Personal_Maquila', 'Observa', 'muc','muc1','muc2','mbl','mbl1','mbl2','mcl','mcl1','mcl2','mcp','mcp1','mcp2','mna','mna1','mna2','mul','mul1','mul2','mnp','mnp1','mnp2','mml','mml1','mml2','mnaa','mnaa','mnaa','mub','mub1','mub2','mcb','mcb1','mcb2','mbe','mbe1','mbe2','mhg','mhg1','mhg2');

      }

   function Enviar()
   {
       $hgMaquila = DB::table('infor_practicahgs')
      ->where('id', $this->Infor_ph->id)
      ->update(['estado' => 2]);

      $this->emit('alert','Muchas gracias, el correo te llegara en cual quiere momento.');

      switch ($this->Infor_ph->Proveedor) {
        case 'Dprissa':
            Mail::to(['nchango@dprissa.com','sbustos@dprissa.com','kandrade@dprissa.com','OcortezH@ransa.net'])->cc(['wfuentesb@ransa.net','smontenegrot@ransa.net','EGananR@ransa.net'])->send(new notificarMaquila($this->Infor_ph));
            break;
            case 'Seryproc':
            Mail::to(['seryproc@gmail.com','OcortezH@ransa.net'])->cc(['wfuentesb@ransa.net','smontenegrot@ransa.net', 'EGananR@ransa.net'])->send(new notificarMaquila($this->Infor_ph));
                break;
            default:
            # code...
            break;
      }

      return redirect()->route('adm.Practica.Maquila');
   }


    public function render()
    {
        return view('livewire.higiene.formulario-higiene-maquila');
    }
}
