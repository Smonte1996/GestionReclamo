<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
         @page {
            margin: 0cm 0cm 0cm;
        }

        body {
            margin: 2.5cm 1cm 1cm;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        /* table{
            margin: 0cm 0cm 0cm;
        } */

        .page-break {
	    page-break-after: always;
      	}

     header {
            position: fixed;
            top: 0.50cm;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
            color: #05941d;
            line-height: 50px;
        }

     .color{
        background-color: black;
     }
     .naranja{
        color: #F29104;
        margin-left: 0.90cm;
        margin-bottom: 0.60cm;
     }

      .container {
        display: flex;
      }

      .columns {
        display: inline-block;
        box-sizing: border-box;
        margin: 5px;
        padding: 5px;
        -webkit-columns: 150px 3;
        -moz-columns: 150px 3;
        columns: 150px 3;
        column-fill: auto;
        column-gap: 10px;
        border-radius: 5px;
        font-size: 16px;
        margin-top: 50px;
        }

      hr, .grosor{
          height: 2px;
          background-color: black;
     }
     .cabecera{
        background-color: #b9b9b9;
     }
     .verde{
        background-color: #05941d;
     }
     .gris{
        background-color: gray;
     }
     .grisclaro{
        background-color: #E8E8E8;
     }
     .tamaño_letra{
        font-size: 10px;
     }
     .verticalText {
        writing-mode: vertical-lr;
        transform: rotate(90deg);
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            /* height: 1cm; */
            text-align: left;
            line-height: 10px;
        }
    </style>

    <title>Informe de Practica de higiene Proveedores</title>
  </head>
  <body>
    <header>
        <img src="img/logo.png" width="200">
         <img src="img/hgs.png" width="500">

         {{-- <div class="naranja pb-4">
            <label><strong>Verificar el cumplimiento de criterios de orden y limpieza en almacén</strong></label>
          </div>  --}}
    </header>
     <p class="naranja" style="font-size: 14px">Verificación del cumplimiento de prácticas higiénicas en el personal</p>
    {{--<hr class="grosor"/> --}}

    <div class="text-center pt-1 m-2">
    <table width="100%" class="pt-3" cellspacing="0" cellpadding="3" >
        <tr class="cabecera " align="center">
            <td colspan="8" class="border border-dark" style="font-size:13px;"><strong>Datos Generales</strong></td>
        </tr>
            <tr>
                <td align="left" class="border border-dark" style="font-size:12px;">
                    <strong>
                    Fecha:
                    </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$PDFPROVEEDOR->fecha}}
                </td>

                <td align="left" class="border border-dark" style="font-size:12px;">
                    <strong>
                   Almacén:
                </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$PDFPROVEEDOR->almacen}}
                </td>

                <td align="left" class="border border-dark" style="font-size:12px;">
                    <strong>
                   Evaluador:
                    </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$PDFPROVEEDOR->evaluador}}
                </td>

                <td align="left" class="border border-dark" style="font-size:12px;">
                    <strong>
                   Proveedor:
                    </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$PDFPROVEEDOR->solicitud}} - {{$PDFPROVEEDOR->Provee->proveedor}}
                </td>
            </tr>
    </table>
  </div>

  <table width="100%" class="pt-1" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="4" class="border border-dark" style="font-size:13px;"><strong>Criterio de calificación</strong></td>
    </tr>
    <tr>
        <td class="border border-dark" align="center" style="font-size:12px;">
            Cumple(2)
        </td>
        <td colspan="2" align="center" class="border border-dark" style="font-size:12px;">
            Cumple parcialmente(1)
        </td>
        <td align="center" class="border border-dark" style="font-size:12px;">
            No cumple(0)
        </td>

    </tr>
    <tr>
        <td class="border border-dark" style="font-size:12px;" align="center">
            La persona evaluada presenta todos los ítems completos del parámetro.
        </td>
        <td colspan="2" class="border border-dark" style="font-size:12px;" align="center">
            Cuando el personal evaluado necesita corregir un parámetro del item evaluado. Ejemplo:
           (Casco limpio, en buen estado y con nombre y apellido) solo cumple con casco limpio pero 
           el casco no tiene nombre y apellido.
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            Cuando presenta un incumplimiento de alguno de los parámetros.
        </td>
    </tr>
    <tr class="cabecera " align="center">
        <td colspan="4" class="border border-dark" style="font-size:14px;"><strong>Calificación</strong></td>
    </tr>
    <tr>
        <td class="border border-dark" style="font-size:12px;" align="center">
           0-70% Deficinte
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            70-85%  Aceptable
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            85 - 95% Bueno
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            Muy Bueno 95 - 100%
        </td>
    </tr>
  </table>

  <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Responsable: {{$nombre}}</strong></td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            3. Casco limpio, en buen estado y con nombre y apellido.
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            5. Cabello Correctamente peinado (mantiene buen aspecto).
        </td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            2. Botas limpias, en buen estado y cordones atados.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            6. Uñas cortas y limpias (aplica para personal operativo).
        </td>
    </tr>

  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="8" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Proveedor </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 1 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 2 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 3 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 4 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 5 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 6 </strong></td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> % de cumplimiento</strong> </td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Detalle de incumplimientos </strong></td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Detalle de acciones tomadas </strong></td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Verificación de cierre de acciones</strong></td>
    </tr>
 </thead>
 <tbody>

     @foreach ($PDFsupervisor as $PDFRESPONSABLES)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
              {{$PDFRESPONSABLES->personal}}
            </td>
            <td class="border border-dark" style="font-size:12px;">
                {{$PDFRESPONSABLES->proveedor}}
              </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($PDFRESPONSABLES->puc)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          Cumple Parcialmente
                      @break
                      @case(0)
                          No cumple
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($PDFRESPONSABLES->pbl)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          Cumple Parcialmente
                      @break
                      @case(0)
                          No cumple
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($PDFRESPONSABLES->pcl)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          Cumple Parcialmente
                      @break
                      @case(0)
                          No cumple
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($PDFRESPONSABLES->pcp)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          Cumple Parcialmente
                      @break
                      @case(0)
                          No cumple
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($PDFRESPONSABLES->pna)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          Cumple Parcialmente
                      @break
                      @case(0)
                          No cumple
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($PDFRESPONSABLES->pul)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          Cumple Parcialmente
                      @break
                      @case(0)
                          No cumple
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $PDFRESPONSABLES->puc + $PDFRESPONSABLES->pbl + $PDFRESPONSABLES->pcl + $PDFRESPONSABLES->pcp + $PDFRESPONSABLES->pna + $PDFRESPONSABLES->pul;
                        echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                        $Porcentaje = $PDFRESPONSABLES->puc + $PDFRESPONSABLES->pbl + $PDFRESPONSABLES->pcl + $PDFRESPONSABLES->pcp + $PDFRESPONSABLES->pna + $PDFRESPONSABLES->pul;
                         echo (round($Porcentaje*100/12))
                        @endphp %</div>
                  </div>
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$PDFRESPONSABLES->puc1}} {{$PDFRESPONSABLES->pbl1}} {{$PDFRESPONSABLES->pcl1}}  {{$PDFRESPONSABLES->pcp1}} {{$PDFRESPONSABLES->pna1}} {{$PDFRESPONSABLES->pul1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$PDFRESPONSABLES->puc2}} {{$PDFRESPONSABLES->pbl2}} {{$PDFRESPONSABLES->pcl2}}  {{$PDFRESPONSABLES->pcp2}} {{$PDFRESPONSABLES->pna2}} {{$PDFRESPONSABLES->pul2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{-- {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}}--}}
                @if (empty($PDFRESPONSABLES->puc2) && empty($PDFRESPONSABLES->pbl2) && empty($PDFRESPONSABLES->pcl2) && empty($PDFRESPONSABLES->pcp2) && empty($PDFRESPONSABLES->pna2) && empty($PDFRESPONSABLES->pul2))

               @else
                   @if (empty($PDFRESPONSABLES->puc3) && empty($PDFRESPONSABLES->pbl3) && empty($PDFRESPONSABLES->pcl3) && empty($PDFRESPONSABLES->pcp3) && empty($PDFRESPONSABLES->pna3) && empty($PDFRESPONSABLES->pul3))
                       Abierto
                   @else
                       Cerrado
                   @endif
               @endif
             </td>
        </tr>
    @endforeach
 </tbody>
 <tr class="cabecera">
    <td colspan="12" class="border border-dark text-center" style="font-size:13px;"><strong>Resulatdo de la evaluación</strong></td>
 </tr>
 <tr>
    <td colspan="5" class="border border-dark cabecera text-center" style="font-size:12px;">
        Número de personas evaluadas
    </td>
    <td colspan="2" class="border border-dark text-center" style="font-size:13px;">
      <strong>{{$PDFsupervisor->count()}}</strong>
    </td>
    <td rowspan="1" colspan="3" class="border border-dark cabecera text-center" style="font-size:12px;">
        Resulatdo de la evaluación
     </td>
     <td rowspan="1" colspan="2" class="border border-dark text-center" style="font-size:12px;">
      <strong>{{round($Procentaje_Total)}}%</strong>
     </td>
 </tr>
 {{-- <tr>
    <td colspan="5" class="border border-dark cabecera text-center" style="font-size:12px;">
        Calificación por Porcentaje de Cumplimiento
    </td>
    <td colspan="2" class="border border-dark cabecera text-center" style="font-size:13px;">
    <strong>
        @if (round($Procentaje_Total) > 95)
        Muy Bueno
    @elseif (round($Procentaje_Total) > 85)
        Bueno
    @elseif (round($Procentaje_Total) > 70)
        Aceptable
    @elseif (round($Procentaje_Total) > 0)
        Deficiente
    @endif
    </strong>
    </td>
 </tr> --}}
  </table>

       {{-- <footer>
        <p class="fw-bold">FCME-0174
            Rev. 02 </p>
       </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(370, 570, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
	</script>
  </body>
</html>
