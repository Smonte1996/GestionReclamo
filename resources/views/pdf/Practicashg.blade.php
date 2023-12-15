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

    <title>Informe de Practica de higiene</title>
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
                <td colspan="6" class="border border-dark" style="font-size:13px;"><strong>Datos Generales</strong></td>
            </tr>
                <tr>
                    <td align="left" class="border border-dark" style="font-size:12px;">
                        <strong>
                        Fecha:
                        </strong>
                    </td>
                    <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                        {{$pdfi->fecha}}
                    </td>

                    <td align="left" class="border border-dark" style="font-size:12px;">
                        <strong>
                       Almacén:
                    </strong>
                    </td>
                    <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                        {{$pdfi->almacen}}
                    </td>

                    <td align="left" class="border border-dark" style="font-size:12px;">
                        <strong>
                       Evaluador:
                        </strong>
                    </td>
                    <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                        {{$pdfi->evaluador}}
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
   {{-- @if ($pdfi->almacen == "Bodega Uio") --}}


            <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
                <tr align="center">
                    <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor))

                    @else
                    {{$supervisor}}
                    @endif </strong></td>
                </tr>
                <tr>
                    <td class="border border-start-0" style="font-size:12px;">
                        1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                    </td>
                    <td class="border border-start-0" style="font-size:12px;">
                        4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                    </td>
                    <td class="border border-end-0" style="font-size:12px;">
                        6. Uñas cortas y limpias (aplica para personal operativo).
                    </td>
                </tr>
                <tr>
                    <td class="border border-start-0" style="font-size:12px;">
                        2. Botas limpias, en buen estado y cordones atados.
                    </td>
                    <td class="border border-start-0" style="font-size:12px;">
                        3. Casco limpio, en buen estado y con nombre y apellido.
                    </td>
                    <td class="border border-end-0" style="font-size:12px;">
                        5. Cabello Correctamente peinado (mantiene buen aspecto).
                    </td>
                </tr>

              </table>
              <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                <thead>
                <tr class="cabecera" align="center">
                    <td></td>
                    <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
                @foreach ($pdfm as $Hgs)
                    <tr>
                        <td class="border border-dark" style="font-size:12px;">
                          {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                        </td>
                        <td align="center" class="border border-dark" style="font-size:12px;">
                            @switch($Hgs->uc)
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
                            @switch($Hgs->bl)
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
                            @switch($Hgs->cl)
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
                            @switch($Hgs->cp)
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
                            @switch($Hgs->na)
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
                            @switch($Hgs->ul)
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
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                    echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                    $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                     echo (round($Porcentaje*100/12))
                                    @endphp %</div>
                              </div>
                        </td>
                        <td align="center" class="border border-dark" style="font-size:10px;">
                            {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                        </td>
                        <td align="center" class="border border-dark" style="font-size:12px;">
                            {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                        </td>
                        <td align="center" class="border border-dark" style="font-size:12px;">
                            {{-- {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}} --}}
                            @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                           @else
                               @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
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
                <td colspan="11" class="border border-dark text-center" style="font-size:13px;"><strong>Resulatdo de la evaluación</strong></td>
             </tr>
             <tr>
                <td colspan="5" class="border border-dark cabecera text-center" style="font-size:12px;">
                    Número de personas evaluadas
                </td>
                <td colspan="2" class="border border-dark text-center" style="font-size:13px;">
                    <strong>{{$pdfm->count()}}</strong>
                  </td>
                  <td rowspan="2" colspan="2" class="border border-dark cabecera text-center" style="font-size:12px;">
                    Porcentaje de cumplimiento
                 </td>
                 <td rowspan="2" colspan="2" class="border border-dark text-center" style="font-size:12px;">
                  <strong>{{round($Todos)}}%</strong>
                 </td>
             </tr>
             <tr>
                <td colspan="5" class="border border-dark cabecera text-center" style="font-size:12px;">
                    Calificación por Porcentaje de Cumplimiento
                </td>
                <td colspan="2" class="border border-dark cabecera text-center" style="font-size:13px;">
                <strong>
                    @if (round($Todos) > 95)
                    Muy Bueno
                @elseif (round($Todos) > 85)
                    Bueno
                @elseif (round($Todos) > 70)
                    Aceptable
                @elseif (round($Todos) > 0)
                    Deficiente
                @endif
                </strong>
                </td>
             </tr>
              </table>


              {{-- <div class="page-break"></div>

              <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
                  <tr  align="center">
                      <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor4))

                      @else
                      {{$supervisor4}}
                      @endif </strong></td>
                  </tr>
                  <tr>
                      <td class="border border-start-0" style="font-size:12px;">
                          1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                      </td>
                      <td class="border border-start-0" style="font-size:12px;">
                          4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                      </td>
                      <td class="border border-end-0" style="font-size:12px;">
                          6. Uñas cortas y limpias (aplica para personal operativo).
                      </td>
                  </tr>
                  <tr>
                      <td class="border border-start-0" style="font-size:12px;">
                          2. Botas limpias, en buen estado y cordones atados.
                      </td>
                      <td class="border border-start-0" style="font-size:12px;">
                          3. Casco limpio, en buen estado y con nombre y apellido.
                      </td>
                      <td class="border border-end-0" style="font-size:12px;">
                          5. Cabello Correctamente peinado (mantiene buen aspecto).
                      </td>
                  </tr>

                </table>
                <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                  <thead>
                  <tr class="cabecera" align="center">
                      <td></td>
                      <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                      <td></td>
                      <td></td>
                      <td></td>
                  </tr>

                  <tr>
                      <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
                  @foreach ($pdfj as $Hgs)
                      <tr>
                          <td class="border border-dark" style="font-size:12px;">
                            {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                          </td>
                          <td align="center" class="border border-dark" style="font-size:12px;">
                              @switch($Hgs->uc)
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
                              @switch($Hgs->bl)
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
                              @switch($Hgs->cl)
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
                              @switch($Hgs->cp)
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
                              @switch($Hgs->na)
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
                              @switch($Hgs->ul)
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
                                  <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                      echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                      $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                       echo (round($Porcentaje*100/12))
                                      @endphp %</div>
                                </div>
                          </td>
                          <td align="center" class="border border-dark" style="font-size:10px;">
                              {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                          </td>
                          <td align="center" class="border border-dark" style="font-size:12px;">
                              {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                          </td>
                          <td align="center" class="border border-dark" style="font-size:12px;">
                              {{-- {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}} --}}
                              {{-- @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                             @else
                                 @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                                     Abierto
                                 @else
                                     Cerrado
                                 @endif
                             @endif
                           </td>
                      </tr>
                  @endforeach
               </tbody>
                </table>


                <div class="page-break"></div>

                <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
                    <tr align="center">
                        <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: {{$supervisor5}}
                         </strong></td>
                    </tr>
                    <tr>
                        <td class="border border-start-0" style="font-size:12px;">
                            1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                        </td>
                        <td class="border border-start-0" style="font-size:12px;">
                            4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                        </td>
                        <td class="border border-end-0" style="font-size:12px;">
                            6. Uñas cortas y limpias (aplica para personal operativo).
                        </td>
                    </tr>
                    <tr>
                        <td class="border border-start-0" style="font-size:12px;">
                            2. Botas limpias, en buen estado y cordones atados.
                        </td>
                        <td class="border border-start-0" style="font-size:12px;">
                            3. Casco limpio, en buen estado y con nombre y apellido.
                        </td>
                        <td class="border border-end-0" style="font-size:12px;">
                            5. Cabello Correctamente peinado (mantiene buen aspecto).
                        </td>
                    </tr>

                  </table>
                  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                    <thead>
                    <tr class="cabecera" align="center">
                        <td></td>
                        <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
                    @foreach ($pdff as $Hgs6)
                        <tr>
                            <td class="border border-dark" style="font-size:12px;">
                             {{$Hgs6->Personal->name}} {{$Hgs6->Personal->lastname}}
                            </td>
                            <td align="center" class="border border-dark" style="font-size:12px;">
                                @switch($Hgs6->uc)
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
                                @switch($Hgs6->bl)
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
                                @switch($Hgs6->cl)
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
                                @switch($Hgs6->cp)
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
                                @switch($Hgs6->na)
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
                                @switch($Hgs6->ul)
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
                                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs6->uc + $Hgs6->bl + $Hgs6->cl + $Hgs6->cp + $Hgs6->na + $Hgs6->ul;
                                        echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                        $Porcentaje = $Hgs6->uc + $Hgs6->bl + $Hgs6->cl + $Hgs6->cp + $Hgs6->na + $Hgs6->ul;
                                         echo (round($Porcentaje*100/12))
                                        @endphp %</div>
                                  </div>
                            </td>
                            <td align="center" class="border border-dark" style="font-size:10px;">
                                {{$Hgs6->uc1}} {{$Hgs6->bl1}} {{$Hgs6->cl1}}  {{$Hgs6->cp1}} {{$Hgs6->na1}} {{$Hgs6->ul1}}
                            </td>
                            <td align="center" class="border border-dark" style="font-size:12px;">
                                {{$Hgs6->uc2}} {{$Hgs6->bl2}} {{$Hgs6->cl2}}  {{$Hgs6->cp2}} {{$Hgs6->na2}} {{$Hgs6->ul2}}
                            </td>
                            <td align="center" class="border border-dark" style="font-size:12px;">

                                @if (empty($Hgs6->uc2) && empty($Hgs6->bl2) && empty($Hgs6->cl2) && empty($Hgs6->cp2) && empty($Hgs6->na2) && empty($Hgs6->ul2))

                               @else
                                   @if (empty($Hgs6->uc3) && empty($Hgs6->bl3) && empty($Hgs6->cl3) && empty($Hgs6->cp3) && empty($Hgs6->na3) && empty($Hgs6->ul3))
                                       Abierto
                                   @else
                                       Cerrado
                                   @endif
                               @endif
                             </td>
                        </tr>
                    @endforeach
                 </tbody>
                  </table>

                  <div class="page-break"></div>

                  <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
                      <tr align="center">
                          <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor6))

                          @else
                          {{$supervisor6}}
                          @endif </strong></td>
                      </tr>
                      <tr>
                          <td class="border border-start-0" style="font-size:12px;">
                              1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                          </td>
                          <td class="border border-start-0" style="font-size:12px;">
                              4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                          </td>
                          <td class="border border-end-0" style="font-size:12px;">
                              6. Uñas cortas y limpias (aplica para personal operativo).
                          </td>
                      </tr>
                      <tr>
                          <td class="border border-start-0" style="font-size:12px;">
                              2. Botas limpias, en buen estado y cordones atados.
                          </td>
                          <td class="border border-start-0" style="font-size:12px;">
                              3. Casco limpio, en buen estado y con nombre y apellido.
                          </td>
                          <td class="border border-end-0" style="font-size:12px;">
                              5. Cabello Correctamente peinado (mantiene buen aspecto).
                          </td>
                      </tr>

                    </table>
                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                      <thead>
                      <tr class="cabecera" align="center">
                          <td></td>
                          <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>

                      <tr>
                          <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
                      @foreach ($pdfe as $Hgs)
                          <tr>
                              <td class="border border-dark" style="font-size:12px;">
                                {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                              </td>
                              <td align="center" class="border border-dark" style="font-size:12px;">
                                  @switch($Hgs->uc)
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
                                  @switch($Hgs->bl)
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
                                  @switch($Hgs->cl)
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
                                  @switch($Hgs->cp)
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
                                  @switch($Hgs->na)
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
                                  @switch($Hgs->ul)
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
                                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                          echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                          $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                           echo (round($Porcentaje*100/12))
                                          @endphp %</div>
                                    </div>
                              </td>
                              <td align="center" class="border border-dark" style="font-size:10px;">
                                  {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                              </td>
                              <td align="center" class="border border-dark" style="font-size:12px;">
                                  {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                              </td>
                              <td align="center" class="border border-dark" style="font-size:12px;">
                                  {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}} 
                                  @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                                 @else
                                     @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                                         Abierto
                                     @else
                                         Cerrado
                                     @endif
                                 @endif
                               </td>
                          </tr>
                      @endforeach
                   </tbody>
                    </table> --}}

                      {{-- <div class="page-break"></div>

                      <p class="text-center" style="font-size:20px;"><strong>Resultado de la Verificación de practicas de higienes por supervisor </strong></p>

                      <table align="center" class="text-center border border-dark">
                        @foreach ($final as $Finales)
                       <tr>
                       <td class="border border-dark" style="font-size:11px; width: 250px">
                              {{$Finales[1]}}
                       </td>
                         <td class="border border-dark" style="width: 250px">
                            <div class="progress">
                               <div class="progress-bar" role="progressbar" style="width: {{round($Finales[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                 {{round($Finales[0])}} %</div>
                             </div>
                       </td>
                   </tr>
                   @endforeach
                </table>


                @else --}}

                 
  {{-- <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
    <tr align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor))

            @else
            {{$supervisor}}
            @endif </strong></td></strong></td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            6. Uñas cortas y limpias (aplica para personal operativo).
        </td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            2. Botas limpias, en buen estado y cordones atados.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            3. Casco limpio, en buen estado y con nombre y apellido.
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            5. Cabello Correctamente peinado (mantiene buen aspecto).
        </td>
    </tr>

  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
    @foreach ($pdf as $Hgs1)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
              {{$Hgs1->Personal->name}} {{$Hgs1->Personal->lastname}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($Hgs1->uc)
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
                @switch($Hgs1->bl)
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
                @switch($Hgs1->cl)
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
                @switch($Hgs1->cp)
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
                @switch($Hgs1->na)
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
                @switch($Hgs1->ul)
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
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs1->uc + $Hgs1->bl + $Hgs1->cl + $Hgs1->cp + $Hgs1->na + $Hgs1->ul;
                        echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                        $Porcentaje = $Hgs1->uc + $Hgs1->bl + $Hgs1->cl + $Hgs1->cp + $Hgs1->na + $Hgs1->ul;
                         echo (round($Porcentaje*100/12))
                        @endphp %</div>
                  </div>
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Hgs1->uc1}} {{$Hgs1->bl1}} {{$Hgs1->cl1}}  {{$Hgs1->cp1}} {{$Hgs1->na1}} {{$Hgs1->ul1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Hgs1->uc2}} {{$Hgs1->bl2}} {{$Hgs1->cl2}}  {{$Hgs1->cp2}} {{$Hgs1->na2}} {{$Hgs1->ul2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}}
                @if (empty($Hgs1->uc2) && empty($Hgs1->bl2) && empty($Hgs1->cl2) && empty($Hgs1->cp2) && empty($Hgs1->na2) && empty($Hgs1->ul2))

               @else
                   @if (empty($Hgs1->uc3) && empty($Hgs1->bl3) && empty($Hgs1->cl3) && empty($Hgs1->cp3) && empty($Hgs1->na3) && empty($Hgs1->ul3))
                       Abierto
                   @else
                       Cerrado
                   @endif
               @endif
             </td>
        </tr>
    @endforeach
 </tbody>
  </table>

  <div class="page-break"></div> --}}

{{-- <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
    <tr align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor1))

        @else
        {{$supervisor1}}
        @endif </strong></td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            6. Uñas cortas y limpias (aplica para personal operativo).
        </td>
    </tr>
    <tr>
        <td class="border border-start-0" style="font-size:12px;">
            2. Botas limpias, en buen estado y cordones atados.
        </td>
        <td class="border border-start-0" style="font-size:12px;">
            3. Casco limpio, en buen estado y con nombre y apellido.
        </td>
        <td class="border border-end-0" style="font-size:12px;">
            5. Cabello Correctamente peinado (mantiene buen aspecto).
        </td>
    </tr>

  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
    @foreach ($pdf2 as $Hgs2)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
              {{$Hgs2->Personal->name}} {{$Hgs2->Personal->lastname}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @switch($Hgs2->uc)
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
                @switch($Hgs2->bl)
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
                @switch($Hgs2->cl)
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
                @switch($Hgs2->cp)
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
                @switch($Hgs2->na)
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
                @switch($Hgs2->ul)
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
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs2->uc + $Hgs2->bl + $Hgs2->cl + $Hgs2->cp + $Hgs2->na + $Hgs2->ul;
                        echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                        $Porcentaje = $Hgs2->uc + $Hgs2->bl + $Hgs2->cl + $Hgs2->cp + $Hgs2->na + $Hgs2->ul;
                         echo (round($Porcentaje*100/12))
                        @endphp %</div>
                  </div>
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Hgs2->uc1}} {{$Hgs2->bl1}} {{$Hgs2->cl1}}  {{$Hgs2->cp1}} {{$Hgs2->na1}} {{$Hgs2->ul1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Hgs2->uc2}} {{$Hgs2->bl2}} {{$Hgs2->cl2}}  {{$Hgs2->cp2}} {{$Hgs2->na2}} {{$Hgs2->ul2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{-- {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}} --}}
               {{-- @if (empty($Hgs2->uc2) && empty($Hgs2->bl2) && empty($Hgs2->cl2) && empty($Hgs2->cp2) && empty($Hgs2->na2) && empty($Hgs2->ul2))

               @else
                   @if (empty($Hgs2->uc3) && empty($Hgs2->bl3) && empty($Hgs2->cl3) && empty($Hgs2->cp3) && empty($Hgs2->na3) && empty($Hgs2->ul3))
                       Abierto
                   @else
                       Cerrado
                   @endif
               @endif

             </td>
        </tr>
    @endforeach
 </tbody>
  </table>


  <div class="page-break"></div> --}}

  {{-- <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
      <tr  align="center">
          <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor2))

          @else
          {{$supervisor2}}
          @endif </strong></td>
      </tr>
      <tr>
          <td class="border border-start-0" style="font-size:12px;">
              1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
          </td>
          <td class="border border-start-0" style="font-size:12px;">
              4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
          </td>
          <td class="border border-end-0" style="font-size:12px;">
              6. Uñas cortas y limpias (aplica para personal operativo).
          </td>
      </tr>
      <tr>
          <td class="border border-start-0" style="font-size:12px;">
              2. Botas limpias, en buen estado y cordones atados.
          </td>
          <td class="border border-start-0" style="font-size:12px;">
              3. Casco limpio, en buen estado y con nombre y apellido.
          </td>
          <td class="border border-end-0" style="font-size:12px;">
              5. Cabello Correctamente peinado (mantiene buen aspecto).
          </td>
      </tr>

    </table>
    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
      <thead>
      <tr class="cabecera" align="center">
          <td></td>
          <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>

      <tr>
          <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
      @foreach ($pdfm as $Hgs)
          <tr>
              <td class="border border-dark" style="font-size:12px;">
                {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
              </td>
              <td align="center" class="border border-dark" style="font-size:12px;">
                  @switch($Hgs->uc)
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
                  @switch($Hgs->bl)
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
                  @switch($Hgs->cl)
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
                  @switch($Hgs->cp)
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
                  @switch($Hgs->na)
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
                  @switch($Hgs->ul)
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
                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                          echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                          $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                           echo (round($Porcentaje*100/12))
                          @endphp %</div>
                    </div>
              </td>
              <td align="center" class="border border-dark" style="font-size:10px;">
                  {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
              </td>
              <td align="center" class="border border-dark" style="font-size:12px;">
                  {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
              </td>
              <td align="center" class="border border-dark" style="font-size:12px;">
                  {{-- {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}} 
                  @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                 @else
                     @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                         Abierto
                     @else
                         Cerrado
                     @endif
                 @endif
               </td>
          </tr>
      @endforeach
   </tbody>
    </table>


    <div class="page-break"></div>

    <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
        <tr align="center">
            <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor3))

            @else
            {{$supervisor3}}
            @endif </strong></td>
        </tr>
        <tr>
            <td class="border border-start-0" style="font-size:12px;">
                1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
            </td>
            <td class="border border-start-0" style="font-size:12px;">
                4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
            </td>
            <td class="border border-end-0" style="font-size:12px;">
                6. Uñas cortas y limpias (aplica para personal operativo).
            </td>
        </tr>
        <tr>
            <td class="border border-start-0" style="font-size:12px;">
                2. Botas limpias, en buen estado y cordones atados.
            </td>
            <td class="border border-start-0" style="font-size:12px;">
                3. Casco limpio, en buen estado y con nombre y apellido.
            </td>
            <td class="border border-end-0" style="font-size:12px;">
                5. Cabello Correctamente peinado (mantiene buen aspecto).
            </td>
        </tr>

      </table>
      <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
        <thead>
        <tr class="cabecera" align="center">
            <td></td>
            <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
        @foreach ($pdfl as $Hgs)
            <tr>
                <td class="border border-dark" style="font-size:12px;">
                  {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                </td>
                <td align="center" class="border border-dark" style="font-size:12px;">
                    @switch($Hgs->uc)
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
                    @switch($Hgs->bl)
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
                    @switch($Hgs->cl)
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
                    @switch($Hgs->cp)
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
                    @switch($Hgs->na)
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
                    @switch($Hgs->ul)
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
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                            echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                            $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                             echo (round($Porcentaje*100/12))
                            @endphp %</div>
                      </div>
                </td>
                <td align="center" class="border border-dark" style="font-size:10px;">
                    {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                </td>
                <td align="center" class="border border-dark" style="font-size:12px;">
                    {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                </td>
                <td align="center" class="border border-dark" style="font-size:12px;">
                    {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}} 
                    @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                   @else
                       @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                           Abierto
                       @else
                           Cerrado
                       @endif
                   @endif
                 </td>
            </tr>
        @endforeach
     </tbody>
      </table>


      <div class="page-break"></div>

      <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
          <tr  align="center">
              <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor4))

              @else
              {{$supervisor4}}
              @endif </strong></td>
          </tr>
          <tr>
              <td class="border border-start-0" style="font-size:12px;">
                  1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
              </td>
              <td class="border border-start-0" style="font-size:12px;">
                  4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
              </td>
              <td class="border border-end-0" style="font-size:12px;">
                  6. Uñas cortas y limpias (aplica para personal operativo).
              </td>
          </tr>
          <tr>
              <td class="border border-start-0" style="font-size:12px;">
                  2. Botas limpias, en buen estado y cordones atados.
              </td>
              <td class="border border-start-0" style="font-size:12px;">
                  3. Casco limpio, en buen estado y con nombre y apellido.
              </td>
              <td class="border border-end-0" style="font-size:12px;">
                  5. Cabello Correctamente peinado (mantiene buen aspecto).
              </td>
          </tr>

        </table>
        <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
          <thead>
          <tr class="cabecera" align="center">
              <td></td>
              <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>

          <tr>
              <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
          @foreach ($pdfj as $Hgs)
              <tr>
                  <td class="border border-dark" style="font-size:12px;">
                    {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                  </td>
                  <td align="center" class="border border-dark" style="font-size:12px;">
                      @switch($Hgs->uc)
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
                      @switch($Hgs->bl)
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
                      @switch($Hgs->cl)
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
                      @switch($Hgs->cp)
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
                      @switch($Hgs->na)
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
                      @switch($Hgs->ul)
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
                          <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                              echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                              $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                               echo (round($Porcentaje*100/12))
                              @endphp %</div>
                        </div>
                  </td>
                  <td align="center" class="border border-dark" style="font-size:10px;">
                      {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                  </td>
                  <td align="center" class="border border-dark" style="font-size:12px;">
                      {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                  </td>
                  <td align="center" class="border border-dark" style="font-size:12px;">
                      {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}}
                      @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                     @else
                         @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                             Abierto
                         @else
                             Cerrado
                         @endif
                     @endif
                   </td>
              </tr>
          @endforeach
       </tbody>
        </table>


        <div class="page-break"></div>

        <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
            <tr align="center">
                <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: {{$supervisor5}}
                 </strong></td>
            </tr>
            <tr>
                <td class="border border-start-0" style="font-size:12px;">
                    1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                </td>
                <td class="border border-start-0" style="font-size:12px;">
                    4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                </td>
                <td class="border border-end-0" style="font-size:12px;">
                    6. Uñas cortas y limpias (aplica para personal operativo).
                </td>
            </tr>
            <tr>
                <td class="border border-start-0" style="font-size:12px;">
                    2. Botas limpias, en buen estado y cordones atados.
                </td>
                <td class="border border-start-0" style="font-size:12px;">
                    3. Casco limpio, en buen estado y con nombre y apellido.
                </td>
                <td class="border border-end-0" style="font-size:12px;">
                    5. Cabello Correctamente peinado (mantiene buen aspecto).
                </td>
            </tr>

          </table>
          <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
            <thead>
            <tr class="cabecera" align="center">
                <td></td>
                <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
            @foreach ($pdff as $Hgs6)
                <tr>
                    <td class="border border-dark" style="font-size:12px;">
                     {{$Hgs6->Personal->name}} {{$Hgs6->Personal->lastname}}
                    </td>
                    <td align="center" class="border border-dark" style="font-size:12px;">
                        @switch($Hgs6->uc)
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
                        @switch($Hgs6->bl)
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
                        @switch($Hgs6->cl)
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
                        @switch($Hgs6->cp)
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
                        @switch($Hgs6->na)
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
                        @switch($Hgs6->ul)
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
                            <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs6->uc + $Hgs6->bl + $Hgs6->cl + $Hgs6->cp + $Hgs6->na + $Hgs6->ul;
                                echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                $Porcentaje = $Hgs6->uc + $Hgs6->bl + $Hgs6->cl + $Hgs6->cp + $Hgs6->na + $Hgs6->ul;
                                 echo (round($Porcentaje*100/12))
                                @endphp %</div>
                          </div>
                    </td>
                    <td align="center" class="border border-dark" style="font-size:10px;">
                        {{$Hgs6->uc1}} {{$Hgs6->bl1}} {{$Hgs6->cl1}}  {{$Hgs6->cp1}} {{$Hgs6->na1}} {{$Hgs6->ul1}}
                    </td>
                    <td align="center" class="border border-dark" style="font-size:12px;">
                        {{$Hgs6->uc2}} {{$Hgs6->bl2}} {{$Hgs6->cl2}}  {{$Hgs6->cp2}} {{$Hgs6->na2}} {{$Hgs6->ul2}}
                    </td>
                    <td align="center" class="border border-dark" style="font-size:12px;">

                        @if (empty($Hgs6->uc2) && empty($Hgs6->bl2) && empty($Hgs6->cl2) && empty($Hgs6->cp2) && empty($Hgs6->na2) && empty($Hgs6->ul2))

                       @else
                           @if (empty($Hgs6->uc3) && empty($Hgs6->bl3) && empty($Hgs6->cl3) && empty($Hgs6->cp3) && empty($Hgs6->na3) && empty($Hgs6->ul3))
                               Abierto
                           @else
                               Cerrado
                           @endif
                       @endif
                     </td>
                </tr>
            @endforeach
         </tbody>
          </table>

          <div class="page-break"></div>

          <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
              <tr align="center">
                  <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor6))

                  @else
                  {{$supervisor6}}
                  @endif </strong></td>
              </tr>
              <tr>
                  <td class="border border-start-0" style="font-size:12px;">
                      1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                  </td>
                  <td class="border border-start-0" style="font-size:12px;">
                      4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                  </td>
                  <td class="border border-end-0" style="font-size:12px;">
                      6. Uñas cortas y limpias (aplica para personal operativo).
                  </td>
              </tr>
              <tr>
                  <td class="border border-start-0" style="font-size:12px;">
                      2. Botas limpias, en buen estado y cordones atados.
                  </td>
                  <td class="border border-start-0" style="font-size:12px;">
                      3. Casco limpio, en buen estado y con nombre y apellido.
                  </td>
                  <td class="border border-end-0" style="font-size:12px;">
                      5. Cabello Correctamente peinado (mantiene buen aspecto).
                  </td>
              </tr>

            </table>
            <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
              <thead>
              <tr class="cabecera" align="center">
                  <td></td>
                  <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>

              <tr>
                  <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
              @foreach ($pdfe as $Hgs)
                  <tr>
                      <td class="border border-dark" style="font-size:12px;">
                        {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                      </td>
                      <td align="center" class="border border-dark" style="font-size:12px;">
                          @switch($Hgs->uc)
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
                          @switch($Hgs->bl)
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
                          @switch($Hgs->cl)
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
                          @switch($Hgs->cp)
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
                          @switch($Hgs->na)
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
                          @switch($Hgs->ul)
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
                              <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                  echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                  $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                   echo (round($Porcentaje*100/12))
                                  @endphp %</div>
                            </div>
                      </td>
                      <td align="center" class="border border-dark" style="font-size:10px;">
                          {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                      </td>
                      <td align="center" class="border border-dark" style="font-size:12px;">
                          {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                      </td>
                      <td align="center" class="border border-dark" style="font-size:12px;">
                           {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}}
                          @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                         @else
                             @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                                 Abierto
                             @else
                                 Cerrado
                             @endif
                         @endif
                       </td>
                  </tr>
              @endforeach
           </tbody>
            </table>


            <div class="page-break"></div>

            <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
                <tr align="center">
                    <td colspan="3" class="border border-dark" style="font-size:13px; background-color:#05941d; color:white"><strong>Responsable: @if (empty($supervisor7))

                    @else
                    {{$supervisor7}}
                    @endif </strong></td>
                </tr>
                <tr>
                    <td class="border border-start-0" style="font-size:12px;">
                        1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                    </td>
                    <td class="border border-start-0" style="font-size:12px;">
                        4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                    </td>
                    <td class="border border-end-0" style="font-size:12px;">
                        6. Uñas cortas y limpias (aplica para personal operativo).
                    </td>
                </tr>
                <tr>
                    <td class="border border-start-0" style="font-size:12px;">
                        2. Botas limpias, en buen estado y cordones atados.
                    </td>
                    <td class="border border-start-0" style="font-size:12px;">
                        3. Casco limpio, en buen estado y con nombre y apellido.
                    </td>
                    <td class="border border-end-0" style="font-size:12px;">
                        5. Cabello Correctamente peinado (mantiene buen aspecto).
                    </td>
                </tr>

              </table>
              <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                <thead>
                <tr class="cabecera" align="center">
                    <td></td>
                    <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Parámetros de evaluación</strong></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Personal </strong></td>
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
                @foreach ($pdfg as $Hgs)
                    <tr>
                        <td class="border border-dark" style="font-size:12px;">
                         {{$Hgs->Personal->name}} {{$Hgs->Personal->lastname}}
                        </td>
                        <td align="center" class="border border-dark" style="font-size:12px;">
                            @switch($Hgs->uc)
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
                            @switch($Hgs->bl)
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
                            @switch($Hgs->cl)
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
                            @switch($Hgs->cp)
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
                            @switch($Hgs->na)
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
                            @switch($Hgs->ul)
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
                                <div class="progress-bar bg-success" role="progressbar" style="width: <?php $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                    echo (round($Porcentaje*100/12))?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@php
                                    $Porcentaje = $Hgs->uc + $Hgs->bl + $Hgs->cl + $Hgs->cp + $Hgs->na + $Hgs->ul;
                                     echo (round($Porcentaje*100/12))
                                    @endphp %</div>
                              </div>
                        </td>
                        <td align="center" class="border border-dark" style="font-size:10px;">
                            {{$Hgs->uc1}} {{$Hgs->bl1}} {{$Hgs->cl1}}  {{$Hgs->cp1}} {{$Hgs->na1}} {{$Hgs->ul1}}
                        </td>
                        <td align="center" class="border border-dark" style="font-size:12px;">
                            {{$Hgs->uc2}} {{$Hgs->bl2}} {{$Hgs->cl2}}  {{$Hgs->cp2}} {{$Hgs->na2}} {{$Hgs->ul2}}
                        </td>
                        <td align="center" class="border border-dark" style="font-size:12px;">
                             {{$Hgs->uc3}} {{$Hgs->bl3}} {{$Hgs->cl3}}  {{$Hgs->cp3}} {{$Hgs->na3}} {{$Hgs->ul3}}
                            @if (empty($Hgs->uc2) && empty($Hgs->bl2) && empty($Hgs->cl2) && empty($Hgs->cp2) && empty($Hgs->na2) && empty($Hgs->ul2))

                           @else
                               @if (empty($Hgs->uc3) && empty($Hgs->bl3) && empty($Hgs->cl3) && empty($Hgs->cp3) && empty($Hgs->na3) && empty($Hgs->ul3))
                                   Abierto
                               @else
                                   Cerrado
                               @endif
                           @endif
                         </td>
                    </tr>
                @endforeach
             </tbody>
            </table> --}}


              {{-- <div class="page-break"></div>

              <p class="text-center" style="font-size:20px;"><strong>Resultado de la Verificación de practicas de higienes por supervisor </strong></p>

              <table align="center" class="text-center border border-dark">
                @foreach ($final as $Finales)
               <tr>
               <td class="border border-dark" style="font-size:11px; width: 250px">
                      {{$Finales[1]}}
               </td>
                 <td class="border border-dark" style="width: 250px">
                    <div class="progress">
                       <div class="progress-bar" role="progressbar" style="width: {{round($Finales[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                         {{round($Finales[0])}} %</div>
                     </div>
               </td>
           </tr>
           @endforeach
        </table> --}}
        {{-- @endif --}}





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
