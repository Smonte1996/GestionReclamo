<?php

namespace App\Http\Controllers;

use App\Models\Practicahg;
use Illuminate\Http\Request;
use App\Models\Infor_practicahg;
use App\Models\Practica_maquila;
use App\Models\Practica_proveedore;
use Illuminate\Support\Facades\DB;
use PDF;

class PracticahgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Higienes = Infor_practicahg::all()->where('estado', 2);
        return view('modulos.Practicas_hg.index', compact('Higienes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Generarpdfs($id)
    {
        // se hace la consulta a la la tabla base para seguir con el id del registro con la relaciones enloque.
        $pdfi = Infor_practicahg::find($id);

        $pdfm = Practicahg::where('infor_practicahg_id', $id)->get();
         
        foreach ($pdfm as $pdfa) {
          $supervisor = $pdfa->Supervisores->name;
          // $Responsable = array_unique($supervisor);
        }

        function Total_supervisores($id)
        {
          $Porcentajes = 0;
          $Puntacion = Practicahg::where('infor_practicahg_id', $id)->get();

          foreach ($Puntacion as $total) {
            $totales = $total->uc + $total->bl + $total->cl + $total->cp + $total->na + $total->ul;
            // $Porcentajes += ($totales*100/12);

                $Porcentajes += ($totales*100/12);
          }

          if (count($Puntacion)>0) {
            $Porcentajes/= count($Puntacion);
            }

          return $Porcentajes;
        }

         $Todos = Total_supervisores($id);
         //$Supervisores = [$supervisor2, $supervisor, $supervisor3, $supervisor5, $supervisor4, $supervisor6, $supervisor7];

        $pdfs = PDF::loadView('pdf.Practicashg', compact('pdfi','pdfm','supervisor', 'Todos'));

        return $pdfs->setPaper('a4','landscape')->stream(strtoupper("Practicas Higiene $pdfi->fecha.pdf"));

        // } else {

        //       // esta parte del codigo pasa los datos para Quito.
        //      // se esat haciendo a la consulta para filtrar con el id del supervisor y a la ves se consulta el nombre del supervisor.
        // // $pdfm = Practicahg::where('infor_practicahg_id', $id)->Where('user_id', 18)->get();
        // // foreach ($pdfm as $pdfa) {
        // //      $supervisor2Uio = $pdfa->Supervisores->name;
        // // }
        // //  dd($supervisor2Uio);
        // // se esat haciendo a la consulta para filtrar con el id del supervisor y a la ves se consulta el nombre del supervisor.
        // $pdfl = Practicahg::where('infor_practicahg_id', $id)->Where('user_id', 17)->get();
        // foreach ($pdfl as $pdfa) {
        //      $supervisor3 = $pdfa->Supervisores->name;
        // }
        // // dd($pdfl);

        // // se esat haciendo a la consulta para filtrar con el id del supervisor y a la ves se consulta el nombre del supervisor.
        // $pdfj = Practicahg::where('infor_practicahg_id', $id)->Where('user_id', 18)->get();
        // foreach ($pdfj as $pdfa) {
        //      $supervisor4 = $pdfa->Supervisores->name;
        // }
        // //dd($pdfj);
        // // se esat haciendo a la consulta para filtrar con el id del supervisor y a la ves se consulta el nombre del supervisor.
        // $pdff = Practicahg::where('infor_practicahg_id', $id)->Where('user_id', 19)->get();
        // foreach ($pdff as $pdfsam) {
        //      $supervisor5 = $pdfsam->Supervisores->name;
        // }
        // // dd($pdfa);

        // // se esat haciendo a la consulta para filtrar con el id del supervisor y a la ves se consulta el nombre del supervisor.
        // $pdfe = Practicahg::where('infor_practicahg_id', $id)->Where('user_id', 20)->get();
        // foreach ($pdfe as $pdfa) {
        //      $supervisor6 = $pdfa->Supervisores->name;
        // }
        // // dd($pdfe);
        // // se esat haciendo a la consulta para filtrar con el id del supervisor y a la ves se consulta el nombre del supervisor.
        //  $pdf2 = Practicahg::where('infor_practicahg_id', $id)->Where('user_id', 21)->get();
        //  foreach ($pdf2 as $pdfa) {
        //       $supervisor1 = $pdfa->Supervisores->name;
        //  }


        // function Total_supervisores($id)
        // {
        //   $Porcentajes = [0,0,0,0,0];
        //   $Porcentajes2 = [0,0,0,0,0];
        //   $Puntacion = Practicahg::where('infor_practicahg_id', $id)->WhereIn('user_id', [17, 18, 19, 20, 21])->get();

        //   foreach ($Puntacion as $total) {
        //     $totales = $total->uc + $total->bl + $total->cl + $total->cp + $total->na + $total->ul;
        //     // $Porcentajes += ($totales*100/12);
        //     if ($total->user_id == 17) {
        //         $Porcentajes2[0] += 1;
        //         $Porcentajes[0] += ($totales*100/12);
        //     }if ($total->user_id == 18) {
        //         $Porcentajes2[1] += 1;
        //         $Porcentajes[1] += ($totales*100/12);
        //     }if ($total->user_id == 19) {
        //         $Porcentajes2[2] += 1;
        //         $Porcentajes[2] += ($totales*100/12);
        //     }if ($total->user_id == 20) {
        //         $Porcentajes2[3] += 1;
        //         $Porcentajes[3] += ($totales*100/12);
        //     }if ($total->user_id == 21) {
        //       $Porcentajes2[4] += 1;
        //       $Porcentajes[4] += ($totales*100/12);
        //   }
        //   }

        //   for ($i=0; $i <5 ; $i++) {
        //     if ($Porcentajes2[$i]>0) {
        //      $Porcentajes[$i]/= $Porcentajes2[$i];
        //     }
        //   }

        //   return $Porcentajes;
        // }

        //  $Todos = Total_supervisores($id);
        //  $Supervisores = [$supervisor3, $supervisor5, $supervisor4, $supervisor6];

        //   for ($i=0; $i < count($Todos) ; $i++) {
        //     $final[] = [$Todos[$i], $Supervisores[$i]];
        //   }
        // //  dd($final);

        // $pdfs = PDF::loadView('pdf.Practicashg', compact('pdfl', 'pdfj','pdff', 'pdfe', 'supervisor5', 'supervisor6', 'supervisor4', 'supervisor3','pdfi', 'final'));

        // return $pdfs->setPaper('a4','landscape')->stream(strtoupper("Practicas Higiene $pdfi->fecha.pdf"));
        // }

    }


/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PdfProveedor($id)
    {
      // se hace la consulta a la la tabla base para seguir con el id del registro con la relaciones enloque.
      $PDFPROVEEDOR = Infor_practicahg::find($id);

      $PDFsupervisor = Practica_proveedore::where('infor_practicahg_id', $id)->get();
      foreach ($PDFsupervisor as $PDFRESPONSABLES) {
       $nombre  = $PDFRESPONSABLES->supervisor;
      }
    //    dd($PDFRESPONSABLE);
       function EvaluacionSupervisores($id)
       {
        $PORCENTAJE = 0;
        $punto = Practica_proveedore::where('infor_practicahg_id', $id)->get();

        foreach ($punto as $Puntos) {
            $total = $Puntos->puc + $Puntos->pbl + $Puntos->pcl + $Puntos->pcp + $Puntos->pna + $Puntos->pul;

                  $PORCENTAJE += ($total*100/12);
                }
                  if (count($punto)>0) {
                    $PORCENTAJE/= count($punto);
                    }

          return $PORCENTAJE;
       }

       $Procentaje_Total = EvaluacionSupervisores($id);

      $pdfs = PDF::loadView('pdf.PracticasProveedor', compact('PDFPROVEEDOR', 'PDFsupervisor', 'nombre', 'Procentaje_Total'));

      return $pdfs->setPaper('a4','landscape')->stream(strtoupper("Practicas Higiene $PDFPROVEEDOR->fecha.pdf"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function PdfMaquila($id)
    {
      // se hace la consulta a la la tabla base para seguir con el id del registro con la relaciones enloque.
      $PDFPROVEEDOR = Infor_practicahg::find($id);

      $PDFresponsable = Practica_maquila::where('infor_practicahg_id', $id)->get();

      foreach ($PDFresponsable as $PDFRESPONSABLES) {
       $nombre  = $PDFRESPONSABLES->Supervisor;
      }


       function EvaluacionMaquila($id)
       {
        $PORCENTAJE = 0;
        $puntuacion = Practica_maquila::where('infor_practicahg_id', $id)->get();

        foreach ($puntuacion as $Puntos) {

            $total = $Puntos->muc + $Puntos->mbl + $Puntos->mcl + $Puntos->mcp + $Puntos->mna + $Puntos->mul + $Puntos->mnp + $Puntos->mml + $Puntos->mnaa + $Puntos->mub + $Puntos->mcb + $Puntos->mbe + $Puntos->mhg;
            //varaible concatenada de la consulta de la base.
            $total1 = $Puntos->muc . $Puntos->mbl . $Puntos->mcl . $Puntos->mcp . $Puntos->mna . $Puntos->mul . $Puntos->mnp . $Puntos->mml . $Puntos->mnaa . $Puntos->mub . $Puntos->mcb . $Puntos->mbe . $Puntos->mhg;
            //hace un conteo de las cantidades de cero que tengo.
            // dd($total1);
            $total2 = substr_count($total1, "0");
            //  dd($total2);
            //hago la resta de la cantidad de cero valor de campos.
            $cantidadFinal = 26-($total2*2);
            //se saca el porcentaje final.
                $PORCENTAJE += ($total*100/$cantidadFinal);
               }

               if (count($puntuacion)>0) {
                $PORCENTAJE/= count($puntuacion);
                }

          return $PORCENTAJE;
       }

       $Valor_total = EvaluacionMaquila($id);

      $pdfs = PDF::loadView('pdf.PracticasMaquila', compact('PDFPROVEEDOR', 'PDFresponsable', 'nombre', 'Valor_total'));

      return $pdfs->setPaper('a4','landscape')->stream(strtoupper("Practicas Higiene Maquila $PDFPROVEEDOR->fecha.pdf"));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function PersonalRansa($id)
    {
      $validacion = Infor_practicahg::find($id);
      // dd();
       if ($validacion->almacen == "Bodega Gye") {
          $consulta = Practicahg::where('infor_practicahg_id', $id)->whereIn('user_id', [4,5,6,10,14,37,38])->where(function ($query){
              $query->whereIn('uc', [1,0])
              ->orWhereIn('bl', [1,0])
              ->orWhereIn('cl', [1,0])
              ->orWhereIn('cp', [1,0])
              ->orWhereIn('na', [1,0])
              ->orWhereIn('ul', [1,0]);
              })->get();

         $resultado1 ='';

         foreach ($consulta as $supervisor1) {
                     //    dd(array($trabajo->id));
           $resultado1 =$resultado1. ','. $supervisor1->id;
           $resultado1=ltrim($resultado1,",");
         }
       } else {
          $consulta = Practicahg::where('infor_practicahg_id', $id)->whereIn('user_id', [17, 18, 19, 20, 21])->where(function ($query){
              $query->whereIn('uc', [1,0])
              ->orWhereIn('bl', [1,0])
              ->orWhereIn('cl', [1,0])
              ->orWhereIn('cp', [1,0])
              ->orWhereIn('na', [1,0])
              ->orWhereIn('ul', [1,0]);
              })->get();

         $resultado1 ='';

         foreach ($consulta as $supervisor1) {
                     //    dd(array($trabajo->id));
           $resultado1 =$resultado1. ','. $supervisor1->id;
           $resultado1=ltrim($resultado1,",");
         }
       }

        return view('modulos.Practicas_hg.task1', compact('consulta', 'resultado1'));
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ConfirmarTarea(Request $request, $id)
    {
        $validar = $request->validate([
            'checklistRansa' => 'required'
        ]);

        $vx = explode(",", $id);
        for ($i=0; $i <count($vx) ; $i++) {
        $varx=$vx[$i] ;
        $valores = DB::table('practicahgs')->where('id', $varx)->update(['uc3' => $request->checklistRansa ? now():null,
                                                                         'bl3' => $request->checklistRansa ? now():null,
                                                                         'cl3' => $request->checklistRansa ? now():null,
                                                                         'cp3' => $request->checklistRansa ? now():null,
                                                                         'na3' => $request->checklistRansa ? now():null,
                                                                         'ul3' => $request->checklistRansa ? now():null,
        ]);
    }

    return redirect()->route('adm.p.h&g.index');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function VistaMaquila($id)
    {
          $workin = DB::table('practica_maquilas')->where('infor_practicahg_id', $id)
          ->where(function ($query){
          $query->whereIn('muc', [1])
          ->orWhereIn('mbl', [1])
          ->orWhereIn('mcl', [1])
          ->orWhereIn('mcp', [1])
          ->orWhereIn('mna', [1])
          ->orWhereIn('mul', [1])
          ->orWhereIn('mnp', [1])
          ->orWhereIn('mml', [1])
          ->orWhereIn('mnaa',[1])
          ->orWhereIn('mub', [1])
          ->orWhereIn('mcb', [1])
          ->orWhereIn('mbe', [1])
          ->orWhereIn('mhg', [1]);
          })->get();

         $resultado ='';
         //dd($workin);
        foreach ($workin as $trabajo) {
                    //    dd(array($trabajo->id));
          $resultado =$resultado. ','. $trabajo->id;
          $resultado=ltrim($resultado,",");
        }


        return view('modulos.Practicas_hg.task2', compact('workin', 'resultado'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ConfirmartaskMaquila(Request $request, $id)
    {
        $validar = $request->validate([
            'checklistMaquila' => 'required'
        ]);

        $vx = explode(",", $id);
        for ($i=0; $i <count($vx) ; $i++) {
        $varx=$vx[$i] ;

        $valores = DB::table('practica_maquilas')->where('id', $varx)->update(['muc3' => $request->checklistMaquila ? now():null,
                                                                                'mbl3' => $request->checklistMaquila ? now():null,
                                                                                'mcl3' => $request->checklistMaquila ? now():null,
                                                                                'mcp3' => $request->checklistMaquila ? now():null,
                                                                                'mna3' => $request->checklistMaquila ? now():null,
                                                                                'mul3' => $request->checklistMaquila ? now():null,
                                                                                'mnp3' => $request->checklistMaquila ? now():null,
                                                                                'mml3' => $request->checklistMaquila ? now():null,
                                                                                'mnaa3' => $request->checklistMaquila ? now():null,
                                                                                'mub3' => $request->checklistMaquila ? now():null,
                                                                                'mcb3' => $request->checklistMaquila ? now():null,
                                                                                'mbe3' => $request->checklistMaquila ? now():null,
                                                                                'mhg3' => $request->checklistMaquila ? now():null,
        ]);
      }

// dd($valores);
         return redirect()->route('adm.p.h&g.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workin = DB::table('practica_proveedores')->where('infor_practicahg_id', $id)
         ->where(function ($query){
         $query->whereIn('puc', [1,0])
         ->orWhereIn('pbl', [1,0])
         ->orWhereIn('pcl', [1,0])
         ->orWhereIn('pcp', [1,0])
         ->orWhereIn('pna', [1,0])
         ->orWhereIn('pul', [1,0]);
         })->get();
         $resultado ='';
        // dd($workin);
        foreach ($workin as $trabajo) {
                    //    dd(array($trabajo->id));
          $resultado =$resultado. ','. $trabajo->id;
          $resultado=ltrim($resultado,",");
        }


        return view('modulos.Practicas_hg.task', compact('workin', 'resultado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validar = $request->validate([
            'checklist' => 'required'
        ]);

        $vx = explode(",", $id);
        for ($i=0; $i <count($vx) ; $i++) {
        $varx=$vx[$i] ;

        $valores = DB::table('practica_proveedores')->where('id', $varx)->update(['puc3' => $request->checklist ? now():null,
                                                                                  'pbl3' => $request->checklist ? now():null,
                                                                                  'pcl3' => $request->checklist ? now():null,
                                                                                  'pcp3' => $request->checklist ? now():null,
                                                                                  'pna3' => $request->checklist ? now():null,
                                                                                  'pul3' => $request->checklist ? now():null,
        ]);
      }

// dd($valores);
         return redirect()->route('adm.p.h&g.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
