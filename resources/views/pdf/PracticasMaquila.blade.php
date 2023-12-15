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

    <title>Informe de Practica de higiene Maquila</title>
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
                   Solicitud:
                    </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$PDFPROVEEDOR->solicitud}}-{{$PDFPROVEEDOR->Proveedor}}
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
    {{-- <tr>
        <td class="border border-dark" style="font-size:12px;" align="center">
            El items evaluado se cumple en su totalidad. No se evidencia incumplimiento alguno (0 hallazgos).
        </td>
        <td colspan="2" class="border border-dark" style="font-size:12px;" align="center">
            El items evaluado se cumple de forma parcial y se evidencia un bajo número de incumplimientos (1-2 hallazgos).
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            El items evaluado se cumple de forma parcial y se evidencia un número significativo de incumplimientos (3 hallazgos o más).
        </td>
    </tr> --}}
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
            1. Uniforme completo y limpio.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            4. Uñas cortas, limpias y sin esmalte.
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            7. No usa perfume.
        </td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            2. Cabello recogido y/o amarrado.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
           5. Botas limpias.
        </td>
        <td class="border border-end-0" style="font-size:12px;">
           8. Manos limpias y  sin heridas.
        </td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            3. Uso correcto de cofia.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            6. Rostro sin maquillaje.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            9. No usa accesorios (aretes, cadenas, anillo, etc).
        </td>
    </tr>
     <tr>
        <td class="border border-start-0" style="font-size:12px;">
            10. Uniforme en buen estado.
        </td>

        <td class="border border-start-0" style="font-size:12px;">
            11. Casco/ cofia en buen estado.
        </td>

        <td class="border border-start-0" style="font-size:12px;">
            12. Botas en buen estado.
        </td>
     </tr>
     <tr>
        <td colspan="3" class="border border-start-0 text-center" style="font-size:12px;">
            13. Hace uso de guantes cuando corresponda.
        </td>
     </tr>
  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="14" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
        <td rowspan="2" colspan="4" class="border border-dark"></td>
    </tr>
    <tr class="cabecera" align="center">
        <td colspan="9" class="border border-dark" style="font-size:13px;"><strong>Higiene personal</strong></td>
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Uniforme</strong></td>
        <td colspan="2" class="border border-dark" style="font-size:13px;"><strong>Durante el trabajo</strong></td>
        </tr>

    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 1 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 2 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 3 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 4 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 5 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 6 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 7 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 8 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 9 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 10 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 11 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 12 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 13 </strong></td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Actividad que se está realizando</strong> </td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> % de cumplimiento</strong> </td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Detalle de incumplimientos </strong></td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Detalle de acciones tomadas </strong></td>
        <td class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Verificación de cierre de acciones</strong></td>
    </tr>
 </thead>
 <tbody>
                @php
                    $contar = 0;
                @endphp
     @foreach ($PDFresponsable as $PDFRESPONSABLES)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
              {{$PDFRESPONSABLES->personal}}
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->muc)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mbl)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mcl)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mcp)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mna)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mul)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mnp)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mml)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mnaa)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mub)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mcb)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mbe)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>
            <td align="center" class="border border-dark" style="font-size:11px;">
                @switch($PDFRESPONSABLES->mhg)
                    @case(2)
                       Cumple
                        @break
                      @case(1)
                          No cumple
                      @break
                      @case(0)
                          No aplica
                      @break
                    @default

                @endswitch
            </td>

            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$PDFRESPONSABLES->observacion}}
            </td>

              @if ($PDFRESPONSABLES->muc != 1 && $PDFRESPONSABLES->mbl != 1 && $PDFRESPONSABLES->mcl != 1 &&  $PDFRESPONSABLES->mcp != 1 && $PDFRESPONSABLES->mna != 1 && $PDFRESPONSABLES->mul != 1 && $PDFRESPONSABLES->mnp != 1 && $PDFRESPONSABLES->mml != 1 && $PDFRESPONSABLES->mnaa != 1 && $PDFRESPONSABLES->mub != 1 && $PDFRESPONSABLES->mcb != 1 && $PDFRESPONSABLES->mbe != 1 && $PDFRESPONSABLES->mhg != 1)
              <td align="center" class="border border-dark" style="font-size:12px; background-color: #73d884">
                Cumple
                @php
                    $contar = $contar+1;
                @endphp
            </td>
              @else
              @if ($PDFRESPONSABLES->muc == 2  && $PDFRESPONSABLES->mbl == 2 && $PDFRESPONSABLES->mcl == 2 &&  $PDFRESPONSABLES->mcp == 2 && $PDFRESPONSABLES->mna == 2 && $PDFRESPONSABLES->mul == 2 && $PDFRESPONSABLES->mnp == 2 && $PDFRESPONSABLES->mml == 2 && $PDFRESPONSABLES->mnaa == 2 && $PDFRESPONSABLES->mub == 2 && $PDFRESPONSABLES->mcb == 2 && $PDFRESPONSABLES->mbe == 2 && $PDFRESPONSABLES->mhg == 2)
              <td align="center" class="border border-dark" style="font-size:12px; background-color: #73d884">
                Cumple
            </td>
              @else
            <td align="center" class="border border-dark" style="font-size:12px; background-color: #ee3f3f">
                No Cumple
              </td>
              @endif

              @endif

              
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$PDFRESPONSABLES->muc1}} {{$PDFRESPONSABLES->mbl1}} {{$PDFRESPONSABLES->mcl1}}  {{$PDFRESPONSABLES->mcp1}} {{$PDFRESPONSABLES->mna1}} {{$PDFRESPONSABLES->mul1}}
                {{$PDFRESPONSABLES->mnp1}} {{$PDFRESPONSABLES->mml1}} {{$PDFRESPONSABLES->mnaa1}} {{$PDFRESPONSABLES->mub1}} {{$PDFRESPONSABLES->mcb1}} {{$PDFRESPONSABLES->mbe1}} {{$PDFRESPONSABLES->mhg1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$PDFRESPONSABLES->muc2}} {{$PDFRESPONSABLES->mbl2}} {{$PDFRESPONSABLES->mcl2}}  {{$PDFRESPONSABLES->mcp2}} {{$PDFRESPONSABLES->mna2}} {{$PDFRESPONSABLES->mul2}}
                {{$PDFRESPONSABLES->mnp2}} {{$PDFRESPONSABLES->mml2}} {{$PDFRESPONSABLES->mnaa2}} {{$PDFRESPONSABLES->mub2}} {{$PDFRESPONSABLES->mcb2}} {{$PDFRESPONSABLES->mbe2}} {{$PDFRESPONSABLES->mhg2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{-- {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}}--}}
                @if (empty($PDFRESPONSABLES->muc2) && empty($PDFRESPONSABLES->mbl2) && empty($PDFRESPONSABLES->mcl2) && empty($PDFRESPONSABLES->mcp2) && empty($PDFRESPONSABLES->mna2) && empty($PDFRESPONSABLES->mul2) && empty($PDFRESPONSABLES->mml2) && empty($PDFRESPONSABLES->mnaa2) && empty($PDFRESPONSABLES->mub2) && empty($PDFRESPONSABLES->mcb2) && empty($PDFRESPONSABLES->mbe2) && empty($PDFRESPONSABLES->mhg2))

               @else
                   @if (empty($PDFRESPONSABLES->muc3) && empty($PDFRESPONSABLES->mbl3) && empty($PDFRESPONSABLES->mcl3) && empty($PDFRESPONSABLES->mcp3) && empty($PDFRESPONSABLES->mna3) && empty($PDFRESPONSABLES->mul3) && empty($PDFRESPONSABLES->mml3) && empty($PDFRESPONSABLES->mnaa3) && empty($PDFRESPONSABLES->mub3) && empty($PDFRESPONSABLES->mcb3) && empty($PDFRESPONSABLES->mbe3) && empty($PDFRESPONSABLES->mhg3))
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
    <td colspan="19" class="border border-dark text-center" style="font-size:13px;"><strong>Resulatdo de la evaluación</strong></td>
 </tr>
 <tr>
    <td colspan="5" class="border border-dark cabecera text-center" style="font-size:12px;">
        Número de personas evaluadas
    </td>
    <td colspan="2" class="border border-dark text-center" style="font-size:13px;">
      <strong>{{$PDFresponsable->count()}}</strong>
    </td>
    <td rowspan="2" colspan="9" class="border border-dark cabecera text-center" style="font-size:12px;">
        Porcentaje de cumplimiento
     </td>
     <td rowspan="2" colspan="3" class="border border-dark text-center" style="font-size:12px;">
      <strong>{{round($Valor_total)}}%</strong>
     </td>
 </tr>
 <tr>
    <td colspan="5" class="border border-dark cabecera text-center" style="font-size:12px;">
        Número de personas aprobadas
    </td>
    <td colspan="2" class="border border-dark text-center" style="font-size:13px;">
    <strong>
    @php
        echo $contar;
    @endphp
    </strong>
    </td>
 </tr>
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
                $pdf->text(270, 820, "Pág $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
	</script>
  </body>
</html>
