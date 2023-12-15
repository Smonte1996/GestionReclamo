<?php

namespace App\Http\Livewire\Guest;

use App\Models\Client;
use Livewire\Component;
use App\Models\Muestreo;
use Livewire\WithFileUploads;
use App\Models\Data_logistica;
use App\Models\File_evidencia;
use App\Mail\NotificacionInforme;
use App\Models\Aql_defecto;
use App\Models\Check_muestreo;
use App\Models\Defecto;
use App\Models\Evidencia_muestreo;
use App\Models\Matriz_defecto;
use App\Models\Defecto_transporte;
use App\Models\File_transporte;
use App\Models\Niveles_estandar;
use App\Models\Tamano_muestra;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Muestreos extends Component
{
    use WithFileUploads;

    public $datas;
    public $tamaño_muestreo; 
    public $data_logis;
    public $logis;
    public $bodega;
    public $clientes;
    public $cliente;
    public $contenedor;
    public $fecha_elaboracion;
    public $fecha_vencimiento;
    public $etiqueta;
    public $Guia;
    public $vida_logistica;
    public $fecha_recepcion;
    public $hora_recepcion;
    public $pedido;
    public $responsable;
    public $pvp;
    public $sku;
    public $nivelesestandars = null;
    public $letratamano = null;
    public $imagen_muestreo;
    public $cantidad;
    public $lote;
    public $Muestras = null;
    public $Letras = null;
    public $Niveles;
    public $registro_sanitario;
    public $Evidencias;
    public $obsrva;
    public $estatus;
    public $Muestreos;
    public $Matrices = null;
    public $matrizdefecto;
    public $Evidencia_muestreos;
    public $defectoProducto = null;
    public $Defectos = null;
    public $Matrices_defectos = null;
    public $descrip = null;
    public $open = false;
    public $Unilever_defectos;
    public $Quipitos_defectos;
    public $Nutribela_defectos;
    public $Aqls;
    public $acrec;
    public $Aceptaciones;
    public $cantidad_caja;
    public $caja_un;
    public $Amper_defectos;
    public $Ricompleto_defectos;
    public $Abrir = false;
    public $skuchecklits;
    public $sku_defectos;
    public $imagen_defectos;
    public $vr1;
    public $vr2;
    public $vr3;
    public $vr4;
    public $vr5;
    public $vr6;
    public $vr7;
    public $vd1;
    public $vd2;
    public $vd3;
    public $vd4;
    public $vd5;
    public $vd6;
    public $vd7;
    // public $vd8;
    public $vd9;
    public $Transporte_defecto;
    public $estado;
    public $cantidades;
    public $caja_uni;
    public $lotes;
    public $sello;
    public $observacion;
    public $comentario;
    public $transportista;
    public $Check;
    public $dato_transporte;
    
 


    protected $rules = [
        'bodega' => 'required',
        'clientes' => 'required',
        'contenedor' => ['required'],
        'Guia' => ['required' , 'numeric'],
        'fecha_recepcion' => ['required', 'date'],
        'hora_recepcion' => ['required', 'date_format:H:i'],
        // 'pedido' => ['nullable','numeric'],
        'responsable' => ['required', 'regex:/^[\pL\s]+$/u'],
        'vr1'=> 'required',
        'vr2' => 'required',
        'vr3'=> 'required',
        'vr4'=> 'required',
        'vr5'=> 'required',
        'vr6'=> 'required',
        'vr7'=> 'required',
        'vd1'=> 'required',
        'vd2'=> 'required',
        'vd3'=> 'required',
        'vd4'=> 'required',
        'vd5'=> 'required',
        'vd6'=> 'required',
        'vd7'=> 'required',
        // 'vd8'=> 'required',
        'vd9'=> 'required',
        'transportista'=> 'required',
        'sello' => 'required'
       
    ];

    

      public function RegistrarInfor() 
    {
       $dataInfor = $this->validate();

       $this->Muestreos = Muestreo::create([
        'bodega' => $dataInfor['bodega'],
        'client_id' => $dataInfor['clientes'],
        'contenedor' => strtoupper($dataInfor['contenedor']),
         'guias' => $dataInfor['Guia'],
         'fecha_recepcion' => $dataInfor['fecha_recepcion'],
         'hora_recepcion' => $dataInfor['hora_recepcion'] ,
        //  'n_pedido' => $dataInfor['pedido'],
         'responsable' => $dataInfor['responsable'] ,
         'transportista' => $dataInfor['transportista'],
         'sello' => $dataInfor['sello'],
         'observacion' => $this->comentario,
         'estado' => 1,
        
    ]);

    $this->Check = Check_muestreo::create([
      'muestreo_id' => $this->Muestreos->id,
      'vr1' => $dataInfor['vr1'],
      'vr2' => $dataInfor['vr2'],
       'vr3'=> $dataInfor['vr3'],
       'vr4'=> $dataInfor['vr4'],
       'vr5'=> $dataInfor['vr5'],
       'vr6'=> $dataInfor['vr6'],
       'vr7'=> $dataInfor['vr7'],
       'vd1'=> $dataInfor['vd1'],
       'vd2'=> $dataInfor['vd2'],
       'vd3'=> $dataInfor['vd3'],
       'vd4'=> $dataInfor['vd4'],
       'vd5'=> $dataInfor['vd5'],
       'vd6'=> $dataInfor['vd6'],
       'vd7'=> $dataInfor['vd7'],
      //  'vd8'=> $dataInfor['vd8'],
       'vd9'=> $dataInfor['vd9'], 
     ]);
      
    }



    public function validarCampos()
    {
        $dato = $this->validate([
        'sku' => 'required',
        'cantidad' => 'required',
        'nivelesestandars' => 'required',
        'letratamano' => 'required',
        'vida_logistica' => 'required',
        'pvp' => 'required',
        'lote' => 'required',
        'caja_un'=>'required',
        'cantidad_caja'=>'required',
        'acrec' => 'required',
        'obsrva'=>'required',
        'etiqueta' => 'required',
        'registro_sanitario' =>'required',
        'estatus'=>'required', ]);
        
        $this->Evidencias = Evidencia_muestreo::create([
            'muestreo_id' => $this->Muestreos->id,
            'data_logistica_id' => $dato['sku'],
            'tamano_muestra_id' => $dato['letratamano'],
            'niveles_estandar_id' => $dato['nivelesestandars'],
            'sku_quala' => 'na',
            'cantidad' => $dato['cantidad'],
            'registro_sanitario' => $dato['registro_sanitario'],
            'fecha_elaboracion' => $this->fecha_elaboracion,
            'fecha_vencimiento' => $this->fecha_vencimiento,
            'vida_util' => $dato['vida_logistica'],
            'lote_fecha' => $dato['lote'],
            'etiqueta_producto' => $dato['etiqueta'],
            'matriz_defecto_id'=> $this->defectoProducto,
            'defecto_id' => $this->matrizdefecto,
            'aql_defecto_id' =>$dato['acrec'],
            'cantidad_caja' => $dato['cantidad_caja'],
            'caja_un' => $dato['caja_un'],
            'pvp' => $dato['pvp'],
            'estado' => 1,
            'estatu_producto' => $dato['estatus'],
            'observacion' => $dato['obsrva'],
        ]);

           if (!is_null($this->imagen_muestreo)) {
             foreach ($this->imagen_muestreo as $image) {
                 $url =  $image->store('public/evidencia_muestreo');
                 $files_evidecencia = File_evidencia::create([
                     'muestreo_id' => $this->Muestreos->id,
                     'evidencia_muestreo_id' => $this->Evidencias->id,
                     'data_logistica_id' => $dato['sku'],
                     'name' => $image->hashName(),
                 ]);
             }
         }

        $this->reset(['sku','letratamano','nivelesestandars','cantidad','vida_logistica','lote','etiqueta','pvp', 'fecha_elaboracion', 'fecha_vencimiento', 'open', 'defectoProducto', 'matrizdefecto','registro_sanitario', 'imagen_muestreo', 'cantidad_caja', 'obsrva','caja_un', 'acrec', 'estatus']);

    }



    public function Defectos()
    {
      $defectos = $this->validate([
       'skuchecklits' => 'required',
       'estado' => 'required',
       'cantidades' => 'required',
       'caja_uni' => 'required',
      //  'lotes' => 'required',
       'observacion' => 'required',
      ]);
       
      $this->Transporte_defecto = Defecto_transporte::create([
        'muestreo_id' => $this->Muestreos->id,
        'evidencia_muestreo_id' => $this->Evidencias->id,
        'data_logistica_id' => $defectos['skuchecklits'],
        'estado' => $defectos['estado'],
        'cantidades' => $defectos['cantidades'],
        'caja_uni' => $defectos['caja_uni'],
        // 'lotes' => $defectos['lotes'],
        'observacion' => $defectos['observacion'],
      ]);
      
      if (!is_null($this->imagen_defectos)) {
        foreach ($this->imagen_defectos as $imagen) {
            $url =  $imagen->store('public/evidencia_defectos');
            $files_transporte = File_transporte::create([
                'muestreo_id' => $this->Muestreos->id,
                'defecto_transporte_id' => $this->Transporte_defecto->id,
                'name' => $imagen->hashName(), 
            ]);
        }
    }
      $this->reset('skuchecklits', 'estado', 'cantidades', 'caja_uni', 'lotes', 'observacion', 'Abrir', 'imagen_defectos');
    }

    public function EnviosCorreo()
    {
        $affected = DB::table('muestreos')
            ->where('id', $this->Muestreos->id)
            ->update(['estado' => 2]);

            $Tabla_evidencia = DB::table('evidencia_muestreos')
            ->where('muestreo_id', $this->Muestreos->id)
            ->update(['estado' => 2]);

         switch ($this->Muestreos->client_id) {
             case '27':
                 Mail::to(['stevemontenegro_9@hotmail.com'])->cc(['smontenegrot@ransa.net','CBozadaP@ransa.net','etenes@ransa.net','ksinalina@ransa.net', 'EGananR@ransa.net'])->send(new NotificacionInforme($this->Muestreos));
                 break;
      
             default:
             Mail::to(['vflores@quala.com.ec', 'mverduga@quala.com.ec'])->cc(['smontenegrot@ransa.net','CBozadaP@ransa.net','etenes@ransa.net','ksinalina@ransa.net', 'EGananR@ransa.net','azapatac@ransa.net', 'DCarchichablaC@ransa.net'])->send(new NotificacionInforme($this->Muestreos));
                 break;
         }
           return redirect()->route('muestreo.cliente');
    }

    public function mount()
    {
        $this->cliente = Client::whereIn('id',[23])->get();
        $this->data_logis = Data_logistica::all();
        $this->Niveles = Niveles_estandar::all();

        $this->Matrices_defectos = Matriz_defecto::where('Marca', 'Saviloe')->get();
        $this->Unilever_defectos = Matriz_defecto::where('Marca', 'UNILEVER')->get();
        $this->Quipitos_defectos = Matriz_defecto::where('Marca', 'QUIPITOS')->get();
        $this->Nutribela_defectos = Matriz_defecto::where('Marca', 'NUTRIBELA')->get();
        $this->Amper_defectos = Matriz_defecto::where('Marca', 'AMPER')->get();
        $this->Ricompleto_defectos = Matriz_defecto::where('Marca', 'RICOMPLETO')->get();
    }

    public function updatedskuchecklits($id)
    {
      $this->sku_defectos = Data_logistica::where('id', $id)->get();
    }

    public function updatednivelesestandars($niveles_estandar_id)
      {
         $this->Letras = Tamano_muestra::where('niveles_estandar_id', $niveles_estandar_id)->get();
      }
      public function updatedletratamano($niveles_estandar_id)
      {
        $this->Muestras = Tamano_muestra::where('id', $niveles_estandar_id)->get();

        $this->Aqls = Aql_defecto::where('tamano_muestra_id', $niveles_estandar_id)->get();
      }

      public function updatedacrec($id)
       {
        $this->Aceptaciones = Aql_defecto::where('id', $id)->get();
      }

      public function updateddefectoProducto($matriz_defecto_id)
      {
        $this->Defectos = Defecto::where('matriz_defecto_id', $matriz_defecto_id)->get();
      }

      public function updatedmatrizdefecto($id)
      {
        $this->descrip = Defecto::where('id', $id)->get();
       }


    public function render()
    {

      if (empty($this->Muestreos->id)) {
        //  $this->dato_transporte = Evidencia_muestreo::where('muestreo_id', $this->Muestreos->id)->get();
         }else {
          $this->dato_transporte = Evidencia_muestreo::where('muestreo_id', $this->Muestreos->id)->get();
         };
          
        if (empty($this->sku)) {
            $this->datas = Data_logistica::where('id', $this->sku)->get();
       }else{
          $this->datas = Data_logistica::where('id', $this->sku)->get();
       };

  //      if(empty($this->sku)) {
  //       $this->logis = Data_logistica::find($this->sku);
  //      }if($this->sku){ 
  //        $this->logis = Data_logistica::find($this->sku);
  //      if(today()->diffInDays($this->fecha_elaboracion) + today()->diffInDays($this->fecha_vencimiento) == $this->logis->vida_util) {
  //         $this->vida_logistica = "Si";

  //      }if(today()->diffInDays($this->fecha_elaboracion) + today()->diffInDays($this->fecha_vencimiento) <> $this->logis->vida_util) {
  //           $this->vida_logistica = "No";
  //         } else {
  //           // $this->vida_logistica = "No aplica";
  //   }
  // }

  if (empty($this->sku)) {
    $this->logis = Data_logistica::find($this->sku);
 } if ($this->sku) {
    $this->logis = Data_logistica::find($this->sku);

    $diasElaboracion = (strtotime($this->fecha_elaboracion)/(60*60*24));
    $diasVencimiento = (strtotime($this->fecha_vencimiento)/(60*60*24));
    $vidaUtilAjustada = $this->logis->vida_util;
    $articulo = $this->logis->sku_quala;
    $skuar = ['19780305','19780107','5762300','21340000','13750000'];
    if (!in_array($articulo, $skuar, true)) {
    if ($diasElaboracion <= 19782 && $diasVencimiento >=19782){
    $vidaUtilAjustada = $vidaUtilAjustada + (1);
    }if ($diasElaboracion <= 21243 && $diasVencimiento >=21243){
      $vidaUtilAjustada = $vidaUtilAjustada + (1);
    }if ($diasElaboracion <= 22704 && $diasVencimiento >=22704){
      $vidaUtilAjustada = $vidaUtilAjustada + (1);
    }if ($diasElaboracion <= 25626 && $diasVencimiento >=25626){
      $vidaUtilAjustada = $vidaUtilAjustada + (1);
    }if ($diasElaboracion <= 24165 && $diasVencimiento >=24165){
      $vidaUtilAjustada = $vidaUtilAjustada + (1);
    // Compara la suma de los días con la vida útil ajustada
  }
  }if (($diasVencimiento - $diasElaboracion) == $vidaUtilAjustada) {
        $this->vida_logistica = "Si";
    } else {
        $this->vida_logistica = "No";
    }
}


  if (empty($this->Muestreos->id)) {
    # code...
  }else{
    $this->Evidencia_muestreos = Evidencia_muestreo::where('muestreo_id', $this->Muestreos->id)->where('estado', 1)->get();
  }
        return view('livewire.guest.muestreos')->layout('layouts.guest2');
    }
}
