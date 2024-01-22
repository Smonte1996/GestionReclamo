<?php

namespace App\Http\Livewire\Checklist;

use App\Models\Pasillo;
use Livewire\Component;
use App\Models\Seco_frio;
use App\Models\Chcklt_liri;
use App\Models\chcklt_seco;
use Illuminate\Support\Arr;
use App\Models\Chcklt_andene;
use App\Models\chcklt_reefer;
use App\Models\Info_checklist;
use App\Mail\NotificarPasillos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Chcklt_bodegayperimetro;
use App\Models\Chcklt_contenedorytuberia;
use App\Models\chcklt_fria;

class FormularioChecklist extends Component
{
    public $seco_frios;
     public $secofrio;
     public $Pasillos;
     public $almacen;
     public $evaluador;
     public $fecha;
     public $pasillo;
     public $Infor_checklist;
     public $forenid;

    //  Variables de bodega seca
     public $bso1;
     public $bso2;
     public $bso3;
     public $bso4;
     public $bso5;
     public $bso6;
     public $bso7;
     public $bso8;
     public $bso9;
     public $bso10;
     public $selectedOptions, $selectedOptions1, $selectedOptions3, $selectedOptions4, $selectedOptions5, $selectedOptions6, $selectedOptions7, $selectedOptions8, $selectedOptions9, $selectedOptions10 = null;

    //  Variable de bodega fria
     public $bfo1;
     public $bfo2;
     public $bfo3;
     public $bfo4;
     public $bfo5;
     public $bfo6;
     public $bfo7;
     public $bfo8;
     public $bfo9;
     public $bfo10;
     public $bf1, $bf2, $bf3, $bf4, $bf5, $bf6, $bf7, $bf8, $bf9, $bf10 = null;

    // Variables de puertas y andenes
     public $bao1;
     public $bao2;
     public $bao3;
     public $bao4;
     public $bao5;
     public $bao6;
     public $bao7;
     public $ba1, $ba2, $ba3, $ba4, $ba5, $ba6, $ba7 = null;

    //  Variable de reefer
     public $bro1;
     public $bro2;
     public $bro3;
     public $bro4;
     public $bro5;
     public $bro6;
     public $br1, $br2, $br3, $br4, $br5, $br6 = null;

    //  Variables de Ampliacion
     public $bamo1;
     public $bamo2;
     public $bamo3;
     public $bamo4;
     public $bamo5;
     public $bamo6;
     public $bamo7;
     public $bamo8;
     public $bamo9;
     public $bamo10;
     public $bamo11;
     public $bamo12;
     public $bamo13;
     public $bam1, $bam2, $bam3, $bam4, $bam5, $bam6, $bam7, $bam8, $bam9, $bam10, $bam11, $bam12, $bam13 = null;

    // Variable de zona y tuberia
    public $zt1, $zt2, $zt3 = null;
    public $zto1, $zto2, $zto3 = null;

    // Variable de bodega y si entorno
    public $cbde1, $cbde2, $cbde3 = null;
    public $cbdeo1, $cbdeo2, $cbdeo3 = null;

     // Variable varias.
     public $seco_checklist;
     public $consulta;
     public $frio_checklist;
     public $reefer_check;
     public $Puertas_Andenes;
     public $consultaPs;
     public $consultar;
     public $consultaA;
     public $consultam;
     public $Ampliacion_checklist;
     public $contenedorTuberia;
     public $PerimetroCd;
     public $zonaguardada;
     public $Pasilloguar;
     public $Bodegas;

     // variable de actulaizacion seco.
     public $bsa1;
     public $bsa2;
     public $bsa3;
     public $bsa4;
     public $bsa5;
     public $bsa6;
     public $bsa7;
     public $bsa8;
     public $bsa9;
     public $bsa10;
     public $bsao1;
     public $bsao2;
     public $bsao3;
     public $bsao4;
     public $bsao5;
     public $bsao6;
     public $bsao7;
     public $bsao8;
     public $bsao10;
     public $bsao9;
     // variable de actulaizacion Frio.
     public $bfa1;
     public $bfa2;
     public $bfa3;
     public $bfa4;
     public $bfa5;
     public $bfa6;
     public $bfa7;
     public $bfa8;
     public $bfa9;
     public $bfa10;
     public $bfao1;
     public $bfao2;
     public $bfao3;
     public $bfao4;
     public $bfao5;
     public $bfao6;
     public $bfao7;
     public $bfao8;
     public $bfao9;
     public $bfao10;
     // variable de actulaizacion reefer.
     public $bra1;
     public $bra2;
     public $bra3;
     public $bra4;
     public $bra5;
     public $bra6;
     public $brao1;
     public $brao2;
     public $brao3;
     public $brao4;
     public $brao5;
     public $brao6;
     // variable de actulaizacion Andenes y Muelles.
     public $baa1;
     public $baa2;
     public $baa3;
     public $baa4;
     public $baa5;
     public $baa6;
     public $baa7;
     public $baao1;
     public $baao2;
     public $baao3;
     public $baao4;
     public $baao5;
     public $baao6;
     public $baao7;
      // variable de actulaizacion Ampliacion liris.
      public $bama1;
      public $bama2;
      public $bama3;
      public $bama4;
      public $bama5;
      public $bama6;
      public $bama7;
      public $bama8;
      public $bama9;
      public $bama10;
      public $bama11;
      public $bama12;
      public $bama13;
      public $bamao1;
      public $bamao2;
      public $bamao3;
      public $bamao4;
      public $bamao5;
      public $bamao6;
      public $bamao7;
      public $bamao8;
      public $bamao9;
      public $bamao10;
      public $bamao11;
      public $bamao12;
      public $bamao13;
      // variable de actulaizacion contenedores y tuberia.
      public $ccta1;
      public $ccta2;
      public $ccta3;
      public $cctao1;
      public $cctao2;
      public $cctao3;
      // variable de actulaizacion Bodega Perimetral.
      public $bpa1;
      public $bpa2;
      public $bpa3;
      public $bpao1;
      public $bpao2;
      public $bpao3;

      public $open = false;


    protected $rules = [
     'fecha' => ['required','date'],
     'evaluador' => 'required',
     'almacen' => 'required',
    ];

    function selectAll()
    {
        $this->selectedOptions = 2;
        $this->selectedOptions1 = 2;
        $this->selectedOptions3 = 2;
        $this->selectedOptions4 = 2;
        $this->selectedOptions5 = 2;
        $this->selectedOptions6 = 2;
        $this->selectedOptions7 = 2;
        $this->selectedOptions9 = 2;
        $this->selectedOptions8 = 2;
        $this->selectedOptions10 = 2;
     }

     function SelectAmpliacion()
     {
      $this->bam1=2;
      $this->bam2=2;
      $this->bam3=2;
      $this->bam4=2;
      $this->bam5=2;
      $this->bam6=2;
      $this->bam7=2;
      $this->bam8=2;
      $this->bam9=2;
      $this->bam10=2;
      $this->bam11=2;
      $this->bam12=2;
      $this->bam13=2;
     }

     function selectReefer()
     {
        $this->br1=2;
        $this->br2=2;
        $this->br3=2;
        $this->br4=2;
        $this->br5=2;
        $this->br6=2;
     }

     function SelectAndenes()
     {
           $this->ba1=2;
           $this->ba2=2;
           $this->ba3=2;
           $this->ba4=2;
           $this->ba5=2;
           $this->ba6=2;
           $this->ba7=2;
     }

     function SelectFria()
     {
        $this->bf1=2;
        $this->bf2=2;
        $this->bf3=2;
        $this->bf4=2;
        $this->bf5=2;
        $this->bf6=2;
        $this->bf7=2;
        $this->bf8=2;
        $this->bf9=2;
        $this->bf10=2;
      }

      function seleccionContenedor() {
        $this->zt1=2;
        $this->zt2=2;
        $this->zt3=2;
      }

      function seleccionContornoCd(){
        $this->cbde1=2;
        $this->cbde2=2;
        $this->cbde3=2;
       }

     function Checklist()
     {
        $Validarinfor = $this->validate();

        $this->Infor_checklist = Info_checklist::create([
         'fecha' => $Validarinfor['fecha'],
         'almacen' => $Validarinfor['almacen'],
         'evaluador' => $Validarinfor['evaluador'],
         'estado' => 1,
         'codigo' => 'CP-'.$Validarinfor['fecha'],
        ]);

     }

     function Checklist_seco()
      {
        // try {
        $ValidarSeco = $this->validate([
        'secofrio'=>'required',
        'pasillo'=>'required',
        'selectedOptions'=> 'required',
        'selectedOptions1'=> 'required',
        'selectedOptions3'=> 'required',
        'selectedOptions4'=> 'required',
        'selectedOptions5'=> 'required',
        'selectedOptions6'=> 'required',
        'selectedOptions7'=> 'required',
        'selectedOptions8'=> 'required',
        'selectedOptions9'=> 'required',
        'selectedOptions10'=> 'required',
        'bso1' => 'required_if:selectedOptions,1,0|nullable',
        'bso2' => 'required_if:selectedOptions2,1,0|nullable',
        'bso3' => 'required_if:selectedOptions3,1,0|nullable',
        'bso4' => 'required_if:selectedOptions4,1,0|nullable',
        'bso5' => 'required_if:selectedOptions5,1,0|nullable',
        'bso6' => 'required_if:selectedOptions6,1,0|nullable',
        'bso7' => 'required_if:selectedOptions7,1,0|nullable',
        'bso8' => 'required_if:selectedOptions8,1,0|nullable',
        'bso9' => 'required_if:selectedOptions9,1,0|nullable',
        'bso10' => 'required_if:selectedOptions10,1,0|nullable',
    ]);

        $this->seco_checklist = chcklt_seco::create([
        'info_checklist_id'=> $this->Infor_checklist->id,
        'seco_frio_id'=> $ValidarSeco['secofrio'],
        'pasillo_id'=> $ValidarSeco['pasillo'],
        'bs1'=> $ValidarSeco['selectedOptions'],
        'bso1'=> $ValidarSeco['bso1'],
        'bs2'=> $ValidarSeco['selectedOptions1'],
        'bso2'=> $ValidarSeco['bso2'],
        'bs3'=> $ValidarSeco['selectedOptions3'],
        'bso3'=> $ValidarSeco['bso3'],
        'bs4'=> $ValidarSeco['selectedOptions4'],
        'bso4'=> $ValidarSeco['bso4'],
        'bs5'=> $ValidarSeco['selectedOptions5'],
        'bso5'=> $ValidarSeco['bso5'],
        'bs6'=> $ValidarSeco['selectedOptions6'],
        'bso6'=> $ValidarSeco['bso6'],
        'bs7'=> $ValidarSeco['selectedOptions7'],
        'bso7'=> $ValidarSeco['bso7'],
        'bs8'=> $ValidarSeco['selectedOptions8'],
        'bso8'=> $ValidarSeco['bso8'],
        'bs9'=> $ValidarSeco['selectedOptions9'],
        'bso9'=> $ValidarSeco['bso9'],
        'bs10'=> $ValidarSeco['selectedOptions10'],
        'bso10'=> $ValidarSeco['bso10'],
        ]);

        $this->reset('pasillo', 'selectedOptions', 'bso1', 'selectedOptions1','bso2', 'selectedOptions3','bso3', 'selectedOptions4','bso4', 'selectedOptions5','bso5', 'selectedOptions6','bso6', 'selectedOptions7','bso7', 'selectedOptions8','bso8', 'selectedOptions9','bso9', 'selectedOptions10','bso10');
      // } catch (Exception $e) {

      //    $Mensaje = $e->getMessage();

      //    return $this->emit('alert', $Mensaje);
      // }

      }


    //   Bodega Liris
      function Checklist_Ampliacion()
      {
        
        $validarAmpliacion = $this->validate([
        'secofrio'=>'required',
        'pasillo'=>'required',
        'bam1'=>'required',
        'bam2'=>'required',
        'bam3'=>'required',
        'bam4'=>'required',
        'bam5'=>'required',
        'bam6'=>'required',
        'bam7'=>'required',
        'bam8'=>'required',
        'bam9'=>'required',
        'bam10'=>'required',
        'bam11'=> 'required',
        'bam12'=> 'required',
        'bam13'=> 'required',
        'bamo1'=> 'required_if: bam1,1,0|nullable',
        'bamo2'=> 'required_if: bam2,1,0|nullable',
        'bamo3'=> 'required_if: bam3,1,0|nullable',
        'bamo4'=> 'required_if: bam4,1,0|nullable',
        'bamo5'=> 'required_if: bam5,1,0|nullable',
        'bamo6'=> 'required_if: bam6,1,0|nullable',
        'bamo7'=> 'required_if: bam7,1,0|nullable',
        'bamo8'=> 'required_if: bam8,1,0|nullable',
        'bamo9'=> 'required_if: bam9,1,0|nullable',
        'bamo10'=> 'required_if:bam10,1,0|nullable',
        'bamo11'=> 'required_if:bam11,1,0|nullable',
        'bamo12'=> 'required_if:bam12,1,0|nullable',
        'bamo13'=> 'required_if:bam13,1,0|nullable'
    ]);

    // try {
          $this->Ampliacion_checklist = Chcklt_liri::create([
            'info_checklist_id'=> $this->Infor_checklist->id,
            'seco_frio_id'=> $validarAmpliacion['secofrio'],
            'pasillo_id'=> $validarAmpliacion['pasillo'],
            'bam1' => $validarAmpliacion['bam1'],
            'bamo1' => $validarAmpliacion['bamo1'],
            'bam2' => $validarAmpliacion['bam2'],
            'bamo2' => $validarAmpliacion['bamo2'],
            'bam3' => $validarAmpliacion['bam3'],
            'bamo3' => $validarAmpliacion['bamo3'],
            'bam4' => $validarAmpliacion['bam4'],
            'bamo4' => $validarAmpliacion['bamo4'],
            'bam5' => $validarAmpliacion['bam5'],
            'bamo5' => $validarAmpliacion['bamo5'],
            'bam6' => $validarAmpliacion['bam6'],
            'bamo6' => $validarAmpliacion['bamo6'],
            'bam7' => $validarAmpliacion['bam7'],
            'bamo7'=> $validarAmpliacion['bamo7'],
            'bam8' => $validarAmpliacion['bam8'],
            'bamo8'=> $validarAmpliacion['bamo8'],
            'bam9' => $validarAmpliacion['bam9'],
            'bamo9'=> $validarAmpliacion['bamo9'],
            'bam10' => $validarAmpliacion['bam10'],
            'bamo10'=> $validarAmpliacion['bamo10'],
            'bam11' => $validarAmpliacion['bam11'],
            'bamo11'=> $validarAmpliacion['bamo11'],
            'bam12' => $validarAmpliacion['bam12'],
            'bamo12'=> $validarAmpliacion['bamo12'],
            'bam13' => $validarAmpliacion['bam13'],
            'bamo13'=> $validarAmpliacion['bamo13'],
          ]);

          $this->reset('pasillo', 'bam1', 'bam2', 'bam3', 'bam4', 'bam5', 'bam6', 'bam7', 'bam8', 'bam9', 'bam10', 'bam11', 'bam12', 'bam13', 'bamo1', 'bamo2', 'bamo3', 'bamo4', 'bamo5', 'bamo6', 'bamo7', 'bamo8', 'bamo9', 'bamo10', 'bamo11', 'bamo12');
      //   } catch (Exception $ampliacion) {
      //        $Mensaje = $ampliacion->getMessage();
      //        return $this->emit('alert', $Mensaje);
      // }
    }


    //  Bodega fria
      function Checklist_frio()
       {
        
        $ValidarFrio = $this->validate([
         'secofrio'=>'required',
         'pasillo'=>'required',
         'bf1'=>'required',
         'bf2'=>'required',
         'bf3'=>'required',
         'bf4'=>'required',
         'bf5'=>'required',
         'bf6'=>'required',
         'bf7'=>'required',
         'bf8'=>'required',
         'bf9'=>'required',
         'bf10'=>'required',
         'bfo1' => 'required_if:bf1,1,0|nullable',
         'bfo2' => 'required_if:bf2,1,0|nullable',
         'bfo3' => 'required_if:bf3,1,0|nullable',
         'bfo4' => 'required_if:bf4,1,0|nullable',
         'bfo5' => 'required_if:bf5,1,0|nullable',
         'bfo6' => 'required_if:bf6,1,0|nullable',
         'bfo7' => 'required_if:bf7,1,0|nullable',
         'bfo8' => 'required_if:bf8,1,0|nullable',
         'bfo9' => 'required_if:bf9,1,0|nullable',
         'bfo10' => 'required_if:bf10,1,0|nullable',
        ]);

        // try {
           $this->frio_checklist = chcklt_fria::create([
            'info_checklist_id'=> $this->Infor_checklist->id,
            'seco_frio_id'=> $ValidarFrio['secofrio'],
            'pasillo_id'=> $ValidarFrio['pasillo'],
            'bf1'=> $ValidarFrio['bf1'],
            'bfo1'=> $ValidarFrio['bfo1'],
            'bf2'=> $ValidarFrio['bf2'],
            'bfo2'=> $ValidarFrio['bfo2'],
            'bf3'=> $ValidarFrio['bf3'],
            'bfo3'=> $ValidarFrio['bfo3'],
            'bf4'=> $ValidarFrio['bf4'],
            'bfo4'=> $ValidarFrio['bfo4'],
            'bf5'=> $ValidarFrio['bf5'],
            'bfo5'=> $ValidarFrio['bfo5'],
            'bf6'=> $ValidarFrio['bf6'],
            'bfo6'=> $ValidarFrio['bfo6'],
            'bf7'=> $ValidarFrio['bf7'],
            'bfo7'=> $ValidarFrio['bfo7'],
            'bf8'=> $ValidarFrio['bf8'],
            'bfo8'=> $ValidarFrio['bfo8'],
            'bf9'=> $ValidarFrio['bf9'],
            'bfo9'=> $ValidarFrio['bfo9'],
            'bf10'=> $ValidarFrio['bf10'],
            'bfo10'=> $ValidarFrio['bfo10'],
           ]);

           $this->reset('pasillo', 'bf1', 'bf2', 'bf3', 'bf4', 'bf5', 'bf6', 'bf7', 'bfo1', 'bfo2', 'bfo3', 'bfo4', 'bfo5', 'bfo6', 'bfo7', 'bf8', 'bfo8', 'bf9', 'bfo9', 'bf10', 'bfo10');

        // } catch (Exception $frio) {
        //      $Mensaje = $frio->getMessage();

        //      return $this->emit('alert', $Mensaje);
        // }
       }


         // Los reefer de liris
       function Checklist_reefer()
       {
        
        $ValidarReefer = $this->validate([
            'secofrio'=>'required',
            'pasillo'=>'required',
            'br1'=>'required',
            'br2'=>'required',
            'br3'=>'required',
            'br4'=>'required',
            'br5'=>'required',
            'br6'=>'required',
            'bro1' => 'required_if:br1,0,1|nullable',
            'bro2' => 'required_if:br2,0,1|nullable',
            'bro3' => 'required_if:br3,0,1|nullable',
            'bro4' => 'required_if:br4,0,1|nullable',
            'bro5' => 'required_if:br5,0,1|nullable',
            'bro6' => 'required_if:br6,0,1|nullable',
        ]);

        // try {
          $this->reefer_check = chcklt_reefer::create([
            'info_checklist_id'=> $this->Infor_checklist->id,
            'seco_frio_id'=> $ValidarReefer['secofrio'],
            'pasillo_id'=> $ValidarReefer['pasillo'],
            'br1' => $ValidarReefer['br1'],
            'bro1' => $ValidarReefer['bro1'],
            'br2' => $ValidarReefer['br2'],
            'bro2' => $ValidarReefer['bro2'],
            'br3' => $ValidarReefer['br3'],
            'bro3' => $ValidarReefer['bro3'],
            'br4' => $ValidarReefer['br4'],
            'bro4' => $ValidarReefer['bro4'],
            'br5' => $ValidarReefer['br5'],
            'bro5' => $ValidarReefer['bro5'],
            'br6' => $ValidarReefer['br6'],
            'bro6' => $ValidarReefer['bro6'],
          ]); 

          $this->reset('pasillo', 'br1', 'br2', 'br3', 'br4', 'br5', 'br6',  'bro1', 'bro2', 'bro3', 'bro4', 'bro5', 'bro6');

        // } catch (Exception $reefer) {
        //     $Mensaje = $reefer->getMessage();

        //     return $this->emit('alert', $Mensaje);
        // }

       }


    //  Puertas y Andenes
       function checklsit_andene()
       {
        $ValidarAnden = $this->validate([
            'secofrio'=>'required',
            'pasillo'=>'required',
            'ba1'=>'required',
            'ba2'=>'required',
            'ba3'=>'required',
            'ba4'=>'required',
            'ba5'=>'required',
            'ba6'=>'required',
            'ba7'=>'required',
            'bao1'=>'required_if:ba1,1,0|nullable',
            'bao2'=>'required_if:ba2,1,0|nullable',
            'bao3'=>'required_if:ba3,1,0|nullable',
            'bao4'=>'required_if:ba4,1,0|nullable',
            'bao5'=>'required_if:ba5,1,0|nullable',
            'bao6'=>'required_if:ba6,1,0|nullable',
            'bao7'=>'required_if:ba7,1,0|nullable',
        ]);
        //  try {
        $this->Puertas_Andenes = Chcklt_andene::create([
          'info_checklist_id'=> $this->Infor_checklist->id,
          'seco_frio_id'=> $ValidarAnden['secofrio'],
          'pasillo_id'=> $ValidarAnden['pasillo'],
          'ba1' => $ValidarAnden['ba1'], 
          'bao1' => $ValidarAnden['bao1'],
          'ba2' => $ValidarAnden['ba2'],
          'bao2' => $ValidarAnden['bao2'],
          'ba3' => $ValidarAnden['ba3'],
          'bao3' => $ValidarAnden['bao3'],
          'ba4' => $ValidarAnden['ba4'],
          'bao4' => $ValidarAnden['bao4'],
          'ba5' => $ValidarAnden['ba5'],
          'bao5' => $ValidarAnden['bao5'],
          'ba6' => $ValidarAnden['ba6'],
          'bao6' => $ValidarAnden['bao6'],
          'ba7' => $ValidarAnden['ba7'],
          'bao7' => $ValidarAnden['bao7'],
        ]);

        $this->reset('pasillo', 'ba1', 'ba2', 'ba3', 'ba4', 'ba5', 'ba6', 'ba7', 'bao1', 'bao2', 'bao3', 'bao4', 'bao5', 'bao6', 'bao7');

      //  } catch (Exception $anden) {
      //    $Mensaje = $anden->getMessage();

      //    return $this->emit('alert', $Mensaje);
      //  }
       }


       function ZonaContenedorTuberia()
       {
        
        $ValidarConteneTuberia = $this->validate([
            'secofrio' => 'required',
            'pasillo' => 'required',
            'zt1' => 'required',
            'zt2' => 'required',
            'zt3' => 'required',
            'zto1' =>'required_if:zt1,1,0|nullable',
            'zto2' => 'required_if:zt2,1,0|nullable',
            'zto3' => 'required_if:zt3,1,0|nullable',
        ]);
        //  try {
        $this->contenedorTuberia = Chcklt_contenedorytuberia::create([
            'info_checklist_id'=> $this->Infor_checklist->id,
            'seco_frio_id'=> $ValidarConteneTuberia['secofrio'],
            'pasillo_id'=> $ValidarConteneTuberia['pasillo'],
            'cct' =>$ValidarConteneTuberia['zt1'],
            'ccto' =>$ValidarConteneTuberia['zto1'],
            'cct2' =>$ValidarConteneTuberia['zt2'],
            'ccto2' =>$ValidarConteneTuberia['zto2'],
            'cct3' =>$ValidarConteneTuberia['zt3'],
            'ccto3' =>$ValidarConteneTuberia['zto3'],
        ]);
       $this->reset('pasillo', 'zt1', 'zt2', 'zt3', 'zto1', 'zto2', 'zto3');

    //   } catch (Exception $tuberia) {
    //     $Mensaje = $tuberia->getMessage();

    //     return $this->emit('alert', $Mensaje);
    //  }
       }


       function ContornoPerimetro()
       {
        
        $ValidarContornoCD = $this->validate([
            'secofrio' => 'required',
            'pasillo' => 'required',
            'cbde1' => 'required',
            'cbde2' => 'required',
            'cbde3' => 'required',
            'cbdeo1' =>'required_if:cbde1,1,0|nullable',
            'cbdeo2' => 'required_if:cbde2,1,0|nullable',
            'cbdeo3' => 'required_if:cbde3,1,0|nullable',
        ]);
        // try{
        $this->PerimetroCd = Chcklt_bodegayperimetro::create([
            'info_checklist_id'=> $this->Infor_checklist->id,
            'seco_frio_id'=> $ValidarContornoCD['secofrio'],
            'pasillo_id'=> $ValidarContornoCD['pasillo'],
            'bp1'=> $ValidarContornoCD['cbde1'],
            'bpo1'=> $ValidarContornoCD['cbdeo1'],
            'bp2'=> $ValidarContornoCD['cbde2'],
            'bpo2'=> $ValidarContornoCD['cbdeo2'],
            'bp3'=> $ValidarContornoCD['cbde3'],
            'bpo3'=> $ValidarContornoCD['cbdeo3'],
        ]);
        $this->reset('pasillo','cbde1','cbde2','cbde3','cbdeo1','cbdeo2','cbdeo3');

      // } catch (Exception $bodega) {
      //   $Mensaje = $bodega->getMessage();

      //   return $this->emit('alert', $Mensaje);
      //  }
       }

       function Enviar()
       {
        // try{

        $affected = DB::table('info_checklists')
        ->where('id', $this->Infor_checklist->id)
        ->update(['estado' => 2]);
 
         switch ($this->Infor_checklist->almacen) {
             case 'Bodega Gye':
            // $id = 62;
            $correosuper = Info_checklist::find($this->Infor_checklist->id);

             foreach ($correosuper->check_seco as $correosup) {
            $correoseco[] = $correosup->Pasillos->supervisor->email;
             }
             $seco = array_unique($correoseco);

             foreach ($correosuper->check_frio as $correosup) {
                $correofrio[] = $correosup->Pasillos->supervisor->email;
                 }
                 $frio = array_unique($correofrio);

             foreach ($correosuper->check_reefer as $correosup) {
                  $correoreefer[] = $correosup->Pasillos->supervisor->email;
                 }
                     $reefer = array_unique($correoreefer);

             foreach ($correosuper->check_Ampliacion as $correosup) {
                $correoAmpliacion[] = $correosup->Pasillos->supervisor->email;
               }
                   $Ampliacion = array_unique($correoAmpliacion);

             foreach ($correosuper->check_andenes as $correosup) {
              $correoandenes[] = $correosup->Pasillos->supervisor->email;
             }
                 $Andenes = array_unique($correoandenes);

            foreach ($correosuper->Check_Contenedorytuberia as $correosup) {
               $correocontenedor[] = $correosup->Pasillos->supervisor->email;
              }
                  $Contenedor = array_unique($correocontenedor);

            foreach ($correosuper->Check_Bodegayperimetros as $correosup) {
              $correoperimetro[] = $correosup->Pasillos->supervisor->email;
             }
                 $Perimetro = array_unique($correoperimetro);

                 $array = [$seco,$frio,$reefer,$Ampliacion,$Andenes,$Contenedor,$Perimetro];

                 $toltal2 = Arr::flatten($array);

                Mail::to(array_unique($toltal2))->cc(['egananr@ransa.net','wfuentesb@ransa.net','smontenegrot@ransa.net'])->send(new NotificarPasillos($this->Infor_checklist->id));

                   break;

                   case 'Bodega Uio':

            $correosuperuio = Info_checklist::find($this->Infor_checklist->id);

             foreach ($correosuperuio->check_seco as $correosup) {
            $correoseco[] = $correosup->Pasillos->supervisor->email;
             }
             $seco = array_unique($correoseco);

             foreach ($correosuperuio->check_andenes as $correosup) {
              $correoandenes[] = $correosup->Pasillos->supervisor->email;
             }
                 $Andenes = array_unique($correoandenes);

            foreach ($correosuperuio->Check_Bodegayperimetros as $correosup) {
              $correoperimetro[] = $correosup->Pasillos->supervisor->email;
             }
                 $Perimetro = array_unique($correoperimetro);

                 $array = [$seco,$Andenes,$Perimetro];

                 $toltal2 = Arr::flatten($array);

               Mail::to(array_unique($toltal2))->cc(['egananr@ransa.net','wfuentesb@ransa.net','smontenegrot@ransa.net', 'ksinalina@ransa.net'])->send(new NotificarPasillos($this->Infor_checklist->id));
                    break;
               default:
                   # code...
                   break;
            }

            $this->emit("envio","Se envio satisfactoriamente.");

         return redirect()->route('adm.Check.list');

      //   } catch (Exception $reefer) {
      //     $Mensaje = $reefer->getMessage();
  
      //     return $this->emit('alert', $Mensaje);
      // }
       }

       function updatedzonaguardada($seco_frio_id) {
        if ($seco_frio_id == 1) {
            $this->Bodegas = chcklt_seco::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }if ($seco_frio_id == 2) {
           $this->Bodegas = chcklt_fria::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }if ($seco_frio_id == 3) {
            $this->Bodegas = chcklt_reefer::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }if ($seco_frio_id == 4) {
            $this->Bodegas = Chcklt_andene::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }if ($seco_frio_id == 5) {
            $this->Bodegas = Chcklt_liri::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }if ($seco_frio_id == 6) {
            $this->Bodegas = Chcklt_contenedorytuberia::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }if ($seco_frio_id == 7) {
            $this->Bodegas = Chcklt_bodegayperimetro::where('seco_frio_id', $seco_frio_id)->where('info_checklist_id', $this->Infor_checklist->id)->get();
        }
       }

       function ActualizarBodegasSeca($id)
       {
        $valorseco = chcklt_seco::where('id', $id)->get();
        $bodegaseca = DB::table('chcklt_secos')
        ->where('id', $id)
        ->update(['bs1' => $this->bsa1[$id] ?? $valorseco[0]['bs1'],
          'bs2' => $this->bsa2[$id] ?? $valorseco[0]['bs2'],
          'bs3' => $this->bsa3[$id] ?? $valorseco[0]['bs3'],
          'bs4' => $this->bsa4[$id] ?? $valorseco[0]['bs4'],
          'bs5' => $this->bsa5[$id] ?? $valorseco[0]['bs5'],
          'bs6' => $this->bsa6[$id] ?? $valorseco[0]['bs6'],
          'bs7' => $this->bsa7[$id] ?? $valorseco[0]['bs7'],
          'bs8' => $this->bsa8[$id] ?? $valorseco[0]['bs8'],
          'bs9' => $this->bsa9[$id] ?? $valorseco[0]['bs9'],
          'bs10' => $this->bsa10[$id] ?? $valorseco[0]['bs10'],
          'bso9' => $this->bsao9[$id] ?? $valorseco[0]['bso9'],
          'bso1' => $this->bsao1[$id] ?? $valorseco[0]['bso1'],
          'bso2' => $this->bsao2[$id] ?? $valorseco[0]['bso2'],
          'bso3' => $this->bsao3[$id] ?? $valorseco[0]['bso3'],
          'bso4' => $this->bsao4[$id] ?? $valorseco[0]['bso4'],
          'bso5' => $this->bsao5[$id] ?? $valorseco[0]['bso5'],
          'bso6' => $this->bsao6[$id] ?? $valorseco[0]['bso6'],
          'bso7' => $this->bsao7[$id] ?? $valorseco[0]['bso7'],
          'bso8' => $this->bsao8[$id] ?? $valorseco[0]['bso8'],
          'bso10' => $this->bsao10[$id] ?? $valorseco[0]['bso10'],
    ]);

        $this->reset('open', 'bsa1', 'bsa2', 'bsa3', 'bsa4', 'bsa5', 'bsa6', 'bsa7',  'bsa8', 'bsa9', 'bsa10','bsao9', 'bsao1', 'bsao2', 'bsao3', 'bsao4', 'bsao5', 'bsao6', 'bsao7', 'bsao8', 'bsao10');
       }

       function ActulizarBodegaFria($id)
       {
        $valorfria = chcklt_fria::where('id', $id)->get();
        $bodegafria = DB::table('chcklt_frias')
        ->where('id', $id)
        ->update(['bf1' => $this->bfa1[$id] ?? $valorfria[0]['bf1'],
          'bf2' => $this->bfa2[$id] ?? $valorfria[0]['bf2'],
          'bf3' => $this->bfa3[$id] ?? $valorfria[0]['bf3'],
          'bf4' => $this->bfa4[$id] ?? $valorfria[0]['bf4'],
          'bf5' => $this->bfa5[$id] ?? $valorfria[0]['bf5'],
          'bf6' => $this->bfa6[$id] ?? $valorfria[0]['bf6'],
          'bf7' => $this->bfa7[$id] ?? $valorfria[0]['bf7'],
          'bf8' => $this->bfa8[$id] ?? $valorfria[0]['bf8'],
          'bf9' => $this->bfa9[$id] ?? $valorfria[0]['bf9'],
          'bf10' => $this->bfa10[$id] ?? $valorfria[0]['bf10'],
          'bfo9' => $this->bfao9[$id] ?? $valorfria[0]['bfo9'],
          'bfo1' => $this->bfao1[$id] ?? $valorfria[0]['bfo1'],
          'bfo2' => $this->bfao2[$id] ?? $valorfria[0]['bfo2'],
          'bfo3' => $this->bfao3[$id] ?? $valorfria[0]['bfo3'],
          'bfo4' => $this->bfao4[$id] ?? $valorfria[0]['bfo4'],
          'bfo5' => $this->bfao5[$id] ?? $valorfria[0]['bfo5'],
          'bfo6' => $this->bfao6[$id] ?? $valorfria[0]['bfo6'],
          'bfo7' => $this->bfao7[$id] ?? $valorfria[0]['bfo7'],
          'bfo8' => $this->bfao8[$id] ?? $valorfria[0]['bfo8'],
          'bfo10' => $this->bfao10[$id] ?? $valorfria[0]['bfo10'],
    ]);

        $this->reset('open', 'bfa1', 'bfa2', 'bfa3', 'bfa4', 'bfa5', 'bfa6', 'bfa7',  'bfa8', 'bfa9', 'bfa10','bfao9', 'bfao1', 'bfao2', 'bfao3', 'bfao4', 'bfao5', 'bfao6', 'bfao7', 'bfao8', 'bfao10');

       }

       function ActualizarBodegareefer($id)
        {
            $valorreefer = chcklt_reefer::where('id', $id)->get();
        $bodegareefer = DB::table('chcklt_reefers')
        ->where('id', $id)
        ->update(['bf1' => $this->bra1[$id] ?? $valorreefer[0]['br1'],
          'br2' => $this->bra2[$id] ?? $valorreefer[0]['br2'],
          'br3' => $this->bra3[$id] ?? $valorreefer[0]['br3'],
          'br4' => $this->bra4[$id] ?? $valorreefer[0]['br4'],
          'br5' => $this->bra5[$id] ?? $valorreefer[0]['br5'],
          'br6' => $this->bra6[$id] ?? $valorreefer[0]['br6'],
          'bro1' => $this->brao1[$id] ?? $valorreefer[0]['bro1'],
          'bro2' => $this->brao2[$id] ?? $valorreefer[0]['bro2'],
          'bro3' => $this->brao3[$id] ?? $valorreefer[0]['bro3'],
          'bro4' => $this->brao4[$id] ?? $valorreefer[0]['bro4'],
          'bro5' => $this->brao5[$id] ?? $valorreefer[0]['bro5'],
          'bro6' => $this->brao6[$id] ?? $valorreefer[0]['bro6'],

    ]);

        $this->reset('open', 'bra1', 'bra2', 'bra3', 'bra4', 'bra5', 'bra6',  'brao1', 'brao2', 'brao3', 'brao4', 'brao5', 'brao6');

       }

       function ActualizarBodegaAndenes($id)
       {
        $valorAndene = Chcklt_andene::where('id', $id)->get();
        $bodegaandene = DB::table('chcklt_andenes')
        ->where('id', $id)
        ->update(['ba1' => $this->baa1[$id] ?? $valorAndene[0]['ba1'],
          'ba2' => $this->baa2[$id] ?? $valorAndene[0]['ba2'],
          'ba3' => $this->baa3[$id] ?? $valorAndene[0]['ba3'],
          'ba4' => $this->baa4[$id] ?? $valorAndene[0]['ba4'],
          'ba5' => $this->baa5[$id] ?? $valorAndene[0]['ba5'],
          'ba6' => $this->baa6[$id] ?? $valorAndene[0]['ba6'],
          'ba7' => $this->baa7[$id] ?? $valorAndene[0]['ba7'],
          'bao1' => $this->baao1[$id] ?? $valorAndene[0]['bao1'],
          'bao2' => $this->baao2[$id] ?? $valorAndene[0]['bao2'],
          'bao3' => $this->baao3[$id] ?? $valorAndene[0]['bao3'],
          'bao4' => $this->baao4[$id] ?? $valorAndene[0]['bao4'],
          'bao5' => $this->baao5[$id] ?? $valorAndene[0]['bao5'],
          'bao6' => $this->baao6[$id] ?? $valorAndene[0]['bao6'],
          'bao7' => $this->baao7[$id] ?? $valorAndene[0]['bao7'],
    ]);

        $this->reset('open', 'baa1', 'baa2', 'baa3', 'baa4', 'baa5', 'baa6', 'baa7', 'baao1', 'baao2', 'baao3', 'baao4', 'baao5', 'baao6', 'baao7');

       }

       function ActualizarBodegaliris($id)
       {
        $valorliris = Chcklt_liri::where('id', $id)->get();
        $bodegaliri = DB::table('chcklt_liris')
        ->where('id', $id)
        ->update(['bam1' => $this->bama1[$id] ?? $valorliris[0]['bam1'],
          'bam2' => $this->bama2[$id] ?? $valorliris[0]['bam2'],
          'bam3' => $this->bama3[$id] ?? $valorliris[0]['bam3'],
          'bam4' => $this->bama4[$id] ?? $valorliris[0]['bam4'],
          'bam5' => $this->bama5[$id] ?? $valorliris[0]['bam5'],
          'bam6' => $this->bama6[$id] ?? $valorliris[0]['bam6'],
          'bam7' => $this->bama7[$id] ?? $valorliris[0]['bam7'],
          'bam8' => $this->bama8[$id] ?? $valorliris[0]['bam8'],
          'bam9' => $this->bama9[$id] ?? $valorliris[0]['bam9'],
          'bam10' => $this->bama10[$id] ?? $valorliris[0]['bam10'],
          'bam11' => $this->bama11[$id] ?? $valorliris[0]['bam11'],
          'bam12' => $this->bama12[$id] ?? $valorliris[0]['bam12'],
          'bam13' => $this->bama13[$id] ?? $valorliris[0]['bam13'],
          'bamo9' => $this->bamao9[$id] ?? $valorliris[0]['bamo9'],
          'bamo1' => $this->bamao1[$id] ?? $valorliris[0]['bamo1'],
          'bamo2' => $this->bamao2[$id] ?? $valorliris[0]['bamo2'],
          'bamo3' => $this->bamao3[$id] ?? $valorliris[0]['bamo3'],
          'bamo4' => $this->bamao4[$id] ?? $valorliris[0]['bamo4'],
          'bamo5' => $this->bamao5[$id] ?? $valorliris[0]['bamo5'],
          'bamo6' => $this->bamao6[$id] ?? $valorliris[0]['bamo6'],
          'bamo7' => $this->bamao7[$id] ?? $valorliris[0]['bamo7'],
          'bamo8' => $this->bamao8[$id] ?? $valorliris[0]['bamo8'],
          'bamo10' => $this->bamao10[$id] ?? $valorliris[0]['bamo10'],
          'bamo11' => $this->bamao11[$id] ?? $valorliris[0]['bamo11'],
          'bamo12' => $this->bamao12[$id] ?? $valorliris[0]['bamo12'],
          'bamo13' => $this->bamao13[$id] ?? $valorliris[0]['bamo13'],
    ]);

        $this->reset('open', 'bama1', 'bama2', 'bama3', 'bama4', 'bama5', 'bama6', 'bama7',  'bama8', 'bama9', 'bama10', 'bama11', 'bama12', 'bama13','bamao9', 'bamao1', 'bamao2', 'bamao3', 'bamao4', 'bamao5', 'bamao6', 'bamao7', 'bamao8', 'bamao10', 'bamao11' , 'bamao12', 'bamao13');

       }

       function ActualizarBodegaConedor($id)
       {
        $valorContenedor = Chcklt_contenedorytuberia::where('id', $id)->get();
        $bodegacontenedor = DB::table('chcklt_contenedorytuberias')
        ->where('id', $id)
        ->update(['cct' => $this->ccta1[$id] ?? $valorContenedor[0]['cct'],
          'cct2' => $this->ccta2[$id] ?? $valorContenedor[0]['cct2'],
          'cct3' => $this->ccta3[$id] ?? $valorContenedor[0]['cct3'],
          'ccto1' => $this->cctao1[$id] ?? $valorContenedor[0]['ccto1'],
          'ccto2' => $this->cctao2[$id] ?? $valorContenedor[0]['ccto2'],
          'ccto3' => $this->cctao3[$id] ?? $valorContenedor[0]['ccto3'],

    ]);

        $this->reset('open', 'ccta1', 'ccta2', 'ccta3', 'cctao1', 'cctao2', 'cctao3');

       }

       function ActualizarBodegaPerimetro($id)
       {
        $valorPerimetro = Chcklt_bodegayperimetro::where('id', $id)->get();
        $bodegacontenedor = DB::table('chcklt_bodegayperimetros')
        ->where('id', $id)
        ->update(['bp1' => $this->bpa1[$id] ?? $valorPerimetro[0]['bp1'],
          'bp2' => $this->bpa2[$id] ?? $valorPerimetro[0]['bp2'],
          'bp3' => $this->bpa3[$id] ?? $valorPerimetro[0]['bp3'],
          'bpo1' => $this->bpao1[$id] ?? $valorPerimetro[0]['bpo1'],
          'bpo2' => $this->bpao2[$id] ?? $valorPerimetro[0]['bpo2'],
          'bpo3' => $this->bpao3[$id] ?? $valorPerimetro[0]['bpo3'],

    ]);

        $this->reset('open', 'bpa1', 'bpa2', 'bpa3', 'bpao1', 'bpao2', 'bpao3');
       }

  /* =====================================================================================================
  Aqui hace el select dependiente se obtiene el id seco_frio_id para poder filtar sobre le id asociado.
  ======================================================================================================*/

    function updatedsecofrio($seco_frio_id)
    {
      $this->Pasillos = Pasillo::where('seco_frio_id', $seco_frio_id)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
    }

    public function render()
    {
     
       /* =========================================================================
          se obtiene el id del inicio de sesion para poder filtrar por ciudad.
         ==========================================================================*/

          if(Auth::user()->Employee->warehouse->id == 1 ){
            $this->seco_frios = Seco_frio::all();
            $this->forenid = Info_checklist::where('estado',1)->where('almacen', 'Bodega Gye')->get();
            }else{
            $this->seco_frios = Seco_frio::whereIn('id', [1,4,7])->get();
            $this->forenid = Info_checklist::where('estado',1)->where('almacen', 'Bodega Uio')->get();
            }

         /* ==================================================================================================================
             Aqui se vuelve a dar valor a la variable inicial y hace a conulta para poder tener id del regitro que esta esatdo 1 
         ======================================================================================================================*/

          if (isset($this->Infor_checklist->id)) {
            
             } else {
                $this->Infor_checklist = Info_checklist::find($this->Infor_checklist);
             }
    
             /* ==================================================================================================================
               Aqui con le if se obtiene el id del registro y se consulta a la tabla que se esta registrado para asi poder obtener los 
               registro que ya se a guarado para no presentarlo. 
             ======================================================================================================================*/

            if (isset($this->seco_checklist->id)){
             $excepto = chcklt_seco::where('info_checklist_id', $this->Infor_checklist->id)->get();
            foreach ($excepto as $exceptos) {
              $consultaP[] = $exceptos->pasillo_id;
            }
            $consulta = $consultaP;
            //  dd($this->consulta);
            $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consulta)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }if(isset($this->frio_checklist->id)){
            $excepto1 = chcklt_fria::where('info_checklist_id', $this->Infor_checklist->id)->get();
             foreach ($excepto1 as $exceptos) {
              $consultaPf[] = $exceptos->pasillo_id;
            }
            $consultaPs = $consultaPf;
            //  dd($this->consultaPs);
            $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consultaPs)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }if (isset($this->reefer_check->id)) {
             $excepto2 = chcklt_reefer::where('info_checklist_id', $this->Infor_checklist->id)->get();
             foreach ($excepto2 as $exceptos) {
              $consultaPr[] = $exceptos->pasillo_id;
            }
            $consultar = $consultaPr;
            //  dd($this->consulta);
            $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consultar)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }if (isset($this->Ampliacion_checklist->id)) {
            $excepto3 = Chcklt_liri::where('info_checklist_id', $this->Infor_checklist->id)->get();
             foreach ($excepto3 as $exceptos) {
              $consultaPam[] = $exceptos->pasillo_id;
            }
            $consultam = $consultaPam;
            $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consultam)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }if (isset($this->Puertas_Andenes->id)) {
           $excepto4 = Chcklt_andene::where('info_checklist_id', $this->Infor_checklist->id)->get();
             foreach ($excepto4 as $exceptos) {
              $consultaPa[] = $exceptos->pasillo_id;
            }
            $consultaA = $consultaPa;
            //  dd($this->consulta);
            $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consultaA)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }if (isset($this->contenedorTuberia->id)) {
            $excepto5 = Chcklt_contenedorytuberia::where('info_checklist_id', $this->Infor_checklist->id)->get();
            foreach ($excepto5 as $exceptos) {
             $consultaCt[] = $exceptos->pasillo_id;
           }
           $consultact = $consultaCt;
           //  dd($this->consulta);
           $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consultact)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }if (isset($this->PerimetroCd->id)) {
            $excepto6 = Chcklt_bodegayperimetro::where('info_checklist_id', $this->Infor_checklist->id)->get();
            foreach ($excepto6 as $exceptos) {
             $consultaPcd[] = $exceptos->pasillo_id;
           }
           $consultaCD = $consultaPcd;
           //  dd($this->consulta);
           $this->Pasillos = DB::table('pasillos')->where('seco_frio_id', $this->secofrio)->whereNotIn('id', $consultaCD)->Where('warehouse_id', Auth::user()->Employee->warehouse->id)->Where('estado', 1)->get();
          }else {
            # code...
          }
    
        return view('livewire.checklist.formulario-checklist');
    }
}
