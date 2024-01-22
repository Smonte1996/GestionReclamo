
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
            height: 2cm;
            /* background-color: #05941d; */
            line-height: 50px;
        }

     .color{
        background-color: black;
     }
     .naranja{
        color: #F29104;
        /* margin-left: 0.90cm;
        margin-bottom: 0.60cm; */
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
            left: 1cm;
            right: 0cm;
            /* height: 1cm; */
            text-align: left;
            line-height: 12px;
        }
    </style>

    <title>Checklist de Pasillo</title>
  </head>
  <body>
    <header>
        <img src="img/logo.png" width="200">
         <img src="img/Pasillo.png" width="340">
    </header>
    <label class="naranja"><strong>Verificar el cumplimiento de orden y limpieza en pasillos</strong></label>
    {{-- <h1 class="text-center">1. Datos Generales</h1>
    <hr class="grosor"/> --}}

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
                    {{$pdf->fecha}}
                </td>

                <td align="left" class="border border-dark" style="font-size:12px;">
                    <strong>
                   Almacén:
                </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$pdf->almacen}}
                </td>

                <td align="left" class="border border-dark" style="font-size:12px;">
                    <strong>
                   Auidor:
                    </strong>
                </td>
                <td colspan="" class="border border-dark text-center" style="font-size:12px;">
                    {{$pdf->evaluador}}
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
            El items evaluado se cumple en su totalidad. No se evidencia incumplimiento alguno (0 hallazgos).
        </td>
        <td colspan="2" class="border border-dark" style="font-size:12px;" align="center">
            El items evaluado se cumple de forma parcial y se evidencia un bajo número de incumplimientos (1-2 hallazgos).
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            El items evaluado se cumple de forma parcial y se evidencia un número significativo de incumplimientos (3 hallazgos o más).
        </td>
    </tr>
    <tr class="cabecera " align="center">
        <td colspan="4" class="border border-dark" style="font-size:14px;"><strong>Calificación</strong></td>
    </tr>
    <tr>
        <td class="border border-dark" style="font-size:12px;" align="center">
        Regular =< 74
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            Bueno 75 - 84 %
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            Muy Bueno 85 - 94 %
        </td>
        <td class="border border-dark" style="font-size:12px;" align="center">
            Excelente => 95 %
        </td>
    </tr>
  </table>

  <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Bodega seca / Zona de almacenamiento en rack</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            2. Los pallets están limpios, sin manchas, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            4. Las cajas se apilan correctamente, no hay cajas desordenadas, abierta o mercadería con riesgo de caída.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            5. No existen cajas abiertas en niveles del 2 al 7 que favorezcan la contaminación cruzada del producto por acumulación de polvo.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            6. No existe doble fila de pallets que obstaculicen el tránsito en el pasillo; los extintores, cajetines y puertas de emergencia están despejadas.
        </td>
    </tr>
   <tr>
    <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
        7. No existen objetos en desuso como cartones, madera, retazos de madera o stretch film adheridos al pallets.
    </td>
   </tr>
   <tr>
    <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
        8. Las ubicaciones están identificadas, no existen rótulos que no correspondan al producto almacenado y se respecta los rótulos de identificación de áreas, clientes y/o productos.
    </td>
   </tr>
   <tr>
    <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
        9. No existe stretch film colgando.
    </td>
   </tr>
    <tr>
        <td colspan="3" class="border-0" style="font-size:11px;">10. El pallets se encuentra ubicado correctamente en el rack (cuadrado en la viga o en el piso).</td>
    </tr>
  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td class="border border-dark"></td>
        <td colspan="10" class="border border-dark" style="font-size:12px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Puntaje obtenido</strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Pasillos </strong></td>
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
    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->check_seco as $Seco)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$Seco->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs4}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs5}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs6}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs7}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs8}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs9}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Seco->bs10}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Seco->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($Seco->bs1 + $Seco->bs2 + $Seco->bs3 + $Seco->bs4 + $Seco->bs5 + $Seco->bs6 + $Seco->bs7 + $Seco->bs8 + $Seco->bs9 + $Seco->bs10)
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $Seco->bs1 + $Seco->bs2 + $Seco->bs3 + $Seco->bs4 + $Seco->bs5 + $Seco->bs6 + $Seco->bs7+ $Seco->bs8 + $Seco->bs9 + $Seco->bs10;
                 echo (round($Porcentaje*100/20))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$Seco->bso1}} {{$Seco->bso2}} {{$Seco->bso3}}  {{$Seco->bso4}} {{$Seco->bso5}} {{$Seco->bso6}} {{$Seco->bso7}} {{$Seco->bso8}} {{$Seco->bso9}} {{$Seco->bso10}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>

  @switch($pdf->almacen)
      @case('Bodega Gye')
  <div class="page-break"></div>

  <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Bodega seca / Zona de supermercado</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            2. Los pallets y/o baldas están limpias, sin manchas o polvo acumulado, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.

        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.

        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            4. El producto se acomoda correctamente sobre pallets, ordenados por artículos, no hay producto en piso o cajas desordenadas.

        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            5. No existe doble fila de pallets y/o roles que obstaculicen el tránsito; los extintores, cajetines y puertas de emergencia están despejadas.

        </td>
    </tr>
       <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            6. Las gavetas están ordenadas, apiladas, limpias y tienen una zona de almacenamiento asignada y rotulada.

        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            7. Las jaulas están identificadas, limpias y tienen una zona de almacenamiento asignada y rotulada.

        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            8. La zona de roles está ordenada e identificada, los roles están alineados, agrupados y correctamente ubicados.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            9. El material de reciclaje está correctamente apilado y tienen una zona de acopio asignado y rotulado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            10. Los productos frágiles (vidrio) se ubican de tal manera que no tienen un riesgo de caída.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            11. No existen objetos en desuso como cartones, madera, retazos de madera, stretch film o papeles en ubicaciones.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            12. Las ubicaciones están identificadas y no existen rótulos que no correspondan al producto almacenado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border-0" style="font-size:11px;">13. No existe stretch film colgando.</td>
    </tr>
  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="13" class="border border-dark" style="font-size:13px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Puntaje obtenido</strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Pasillos </strong></td>
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

    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->check_Ampliacion as $Ampliacion)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$Ampliacion->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam4}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam5}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam6}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam7}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam8}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam9}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam10}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam11}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam12}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Ampliacion->bam13}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Ampliacion->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($Ampliacion->bam1 + $Ampliacion->bam2 + $Ampliacion->bam3 + $Ampliacion->bam4 + $Ampliacion->bam5 + $Ampliacion->bam6 + $Ampliacion->bam7 + $Ampliacion->bam8 + $Ampliacion->bam9 + $Ampliacion->bam10 + $Ampliacion->bam11 + $Ampliacion->bam12 + $Ampliacion->bam13)
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $Ampliacion->bam1 + $Ampliacion->bam2 + $Ampliacion->bam3 + $Ampliacion->bam4 + $Ampliacion->bam5 + $Ampliacion->bam6 + $Ampliacion->bam7 + $Ampliacion->bam8 + $Ampliacion->bam9 + $Ampliacion->bam10 + $Ampliacion->bam11 + $Ampliacion->bam12 + $Ampliacion->bam13;
                 echo (round($Porcentaje*100/26))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$Ampliacion->bamo1}} {{$Ampliacion->bamo2}} {{$Ampliacion->bamo3}}  {{$Ampliacion->bamo4}} {{$Ampliacion->bamo5}} {{$Ampliacion->bamo6}} {{$Ampliacion->bamo7}} {{$Ampliacion->bamo8}} {{$Ampliacion->bamo9}} {{$Ampliacion->bamo10}} {{$Ampliacion->bamo11}} {{$Ampliacion->bamo12}} {{$Ampliacion->bamo13}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>
  @break

  @default

@endswitch

@if ($pdf->almacen == 'Bodega Gye')
  <div class="page-break"></div>

  <table width="100%" class="pt-4 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Bodega fría / Zona de almacenamiento en rack</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            2. Los pallets están limpios, sin manchas, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            4. Las cajas se apilan correctamente, no hay cajas desordenadas o mercadería con riesgo de caída.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            5. No existen cajas abiertas en niveles del 2 al 7 que favorezcan la contaminación cruzada del producto por acumulación de polvo.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            6. No existe doble fila de pallets que obstaculicen el tránsito en el pasillo; los extintores, cajetines y puertas de emergencia están despejadas.
        </td>
    </tr>
   <tr>
    <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
        7. No existen objetos en desuso como cartones, madera, retazos de madera o stretch film adheridos al pallets.
    </td>
   </tr>
   <tr>
    <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
        8. Las ubicaciones están identificadas, no existen rótulos que no correspondan al producto almacenado y se respecta los rótulos de identificación de áreas, clientes y/o productos.
    </td>
   </tr>
   <tr>
    <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
        9. No existe stretch film colgando.
    </td>
   </tr>
    <tr>
        <td colspan="3" class="border-0" style="font-size:11px;">10. El pallets se encuentra ubicado correctamente en el rack (cuadrado en la viga o en el piso).</td>
    </tr>
  </table>
  <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="10" class="border border-dark" style="font-size:13px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Puntaje obtenido </strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Pasillos </strong></td>
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

    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->check_frio as $Fria)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$Fria->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf4}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf5}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf6}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf7}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf8}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf9}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Fria->bf10}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Fria->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($Fria->bf1 + $Fria->bf2 + $Fria->bf3 + $Fria->bf4 + $Fria->bf5 + $Fria->bf6 + $Fria->bf7 + $Fria->bf8 + $Fria->bf9 + $Fria->bf10)
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $Fria->bf1 + $Fria->bf2 + $Fria->bf3 + $Fria->bf4 + $Fria->bf5 + $Fria->bf6 + $Fria->bf7 + $Fria->bf8 + $Fria->bf9 + $Fria->bf10;
                 echo (round($Porcentaje*100/20))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$Fria->bfo1}} {{$Fria->bfo2}} {{$Fria->bfo3}}  {{$Fria->bfo4}} {{$Fria->bfo5}} {{$Fria->bfo6}} {{$Fria->bfo7}} {{$Fria->bfo8}} {{$Fria->bfo9}} {{$Fria->bfo10}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>


  <div class="page-break"></div>

  <table width="100%" class="pt-4 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Zona de reefer</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            1. Cortina de flecos limpia, sin etiquetas adheridas o suciedad acumulada.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            2. Piso limpio, sin suciedad acumulada o producto derramado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            3. Paredes y techo limpio, sin suciedad acumulada o etiquetas adheridas.
        </td>
    </tr>
    <tr>
        <td colspan="3" class=" border border-start-0 border-end-0" style="font-size:12px;">
            4. Producto sobre percha o gaveta, no en piso y correctamente ubicado (ordenado).
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            5. Las puertas se mantienen cerradas para mantener la temperatura (cuando no exista actividad de recepción/despacho).
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            6. No hay acumulación de materiales en desuso que impidan el transito.
        </td>
    </tr>
  </table>
 <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="6" class="border border-dark" style="font-size:12px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Puntaje obtenido</strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Pasillos </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 1 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 2 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 3 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 4 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 5 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 6 </strong></td>
    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->check_reefer as $Reefer)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$Reefer->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Reefer->br1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Reefer->br2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Reefer->br3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Reefer->br4}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Reefer->br5}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Reefer->br6}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Reefer->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($Reefer->br1 + $Reefer->br2 + $Reefer->br3 + $Reefer->br4 + $Reefer->br5 + $Reefer->br6 )
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $Reefer->br1 + $Reefer->br2 + $Reefer->br3 + $Reefer->br4 + $Reefer->br5 + $Reefer->br6;
                 echo (round($Porcentaje*100/12))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$Reefer->bro1}} {{$Reefer->bro2}} {{$Reefer->bro3}}  {{$Reefer->bro4}} {{$Reefer->bro5}} {{$Reefer->bro6}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>
  @else

  @endif
  <table width="100%" class="pt-4 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Andenes, muelle de carga y patio de maniobras / Evaluación por naves</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            1. Las tulas o cajones para el reciclaje se usan correctamente (cartón, stretch film y retazos de madera separados e identificados)
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            2. Las estaciones para monitoreo de roedores se encuentran despejadas (zona interna y externa de puertas).
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            3. Los utensilios de limpieza, conos de seguridad, reflectores y cizallas están ubicados en la zona asignadas correctamente ordenados.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            4. Los modulares/escritorios están ordenados y limpios.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
            5. No existen objetos que obstaculicen el acceso a cajetines y/o extintores de la red contra incendio.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:11px;">
          6. Las puertas de andenes se mantienen cerradas si no hay vehículo estacionado.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border-0" style="font-size:11px;">7. El patio de maniobras se mantiene despejado (sin acumulación de pallets, producto u objetos).</td>
    </tr>
  </table>
 <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="7" class="border border-dark" style="font-size:13px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Puntaje obtenido</strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px; width:20px;" align="center"><strong> Pasillos </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 1 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 2 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 3 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 4 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 5 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 6 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 7 </strong></td>
    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->check_andenes as $Andene)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$Andene->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba4}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba5}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba6}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$Andene->ba7}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$Andene->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($Andene->ba1 + $Andene->ba2 + $Andene->ba3 + $Andene->ba4 + $Andene->ba5 + $Andene->ba6 + $Andene->ba7)
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $Andene->ba1 + $Andene->ba2 + $Andene->ba3 + $Andene->ba4 + $Andene->ba5 + $Andene->ba6 + $Andene->ba7;
                 echo (round($Porcentaje*100/14))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$Andene->bao1}} {{$Andene->bao2}} {{$Andene->bao3}}  {{$Andene->bao4}} {{$Andene->bao5}} {{$Andene->bao6}} {{$Andene->bao7}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>

@if ($pdf->almacen == 'Bodega Gye')
  <div class="page-break"></div>

  <table width="100%" class="pt-4 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Zona de contenedores para averías y área de tuberías</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            1. No hay acumulación de materiales en desuso (pallets, plásticos, madera, etc.)
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            2. No existen pallets de producto, equipos o materiales almacenados/ubicados en área no definidas para este fin.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            3. Se mantiene el orden del área.
        </td>
    </tr>
  </table>
 <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="3" class="border border-dark" style="font-size:12px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Puntaje obtenido</strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Pasillos </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 1 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 2 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 3 </strong></td>
    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->Check_Contenedorytuberia as $contenedorTuberia)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$contenedorTuberia->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$contenedorTuberia->cct}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$contenedorTuberia->cct2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$contenedorTuberia->cct3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$contenedorTuberia->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($contenedorTuberia->cct + $contenedorTuberia->cct2 + $contenedorTuberia->cct3)
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $contenedorTuberia->cct + $contenedorTuberia->cct2 + $contenedorTuberia->cct3;
                 echo (round($Porcentaje*100/6))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$contenedorTuberia->ccto}} {{$contenedorTuberia->ccto2}} {{$contenedorTuberia->ccto3}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>
  @else

  @endif

  <table width="100%" class="pt-4 border border-dark" cellspacing="0" cellpadding="3">
    <tr class="cabecera " align="center">
        <td colspan="3" class="border border-dark" style="font-size:13px;"><strong>Contorno de bodega y perímetro del CD</strong></td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            1. Las salidas de emergencia se mantienen despejadas.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            2. No hay acumulación de objetos, materiales o artículos en desuso que puedan servir de refugio de animales y plagas comunes.
        </td>
    </tr>
    <tr>
        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
            3. Se mantiene una correcta limpieza y aseo del área.
        </td>
    </tr>
  </table>
 <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
    <thead>
    <tr class="cabecera" align="center">
        <td></td>
        <td colspan="3" class="border border-dark" style="font-size:12px;"><strong>Puntuación por items evaluados</strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Responsable </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Puntaje obtenido</strong> </td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Porcentaje % </strong></td>
        <td rowspan="2" class="border border-dark cabecera" style="font-size:11px;" align="center"><strong> Ubicaciones observadas </strong></td>
    </tr>
    <tr>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> Pasillos </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 1 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 2 </strong></td>
        <td class="border border-dark cabecera" style="font-size:12px;" align="center"><strong> 3 </strong></td>
    </tr>
 </thead>
 <tbody>
    @foreach ($pdf->Check_Bodegayperimetros as $BodegaPerimetro)
        <tr>
            <td class="border border-dark" style="font-size:12px;">
             {{$BodegaPerimetro->Pasillos->name}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$BodegaPerimetro->bp1}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$BodegaPerimetro->bp2}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                {{$BodegaPerimetro->bp3}}
            </td>
            <td align="center" class="border border-dark" style="font-size:10px;">
                {{$BodegaPerimetro->Pasillos->responsables}}
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
               @php
                echo ($BodegaPerimetro->bp1 + $BodegaPerimetro->bp2 + $BodegaPerimetro->bp3)
               @endphp
            </td>
            <td align="center" class="border border-dark" style="font-size:12px;">
                @php
                $Porcentaje = $BodegaPerimetro->bp1 + $BodegaPerimetro->bp2 + $BodegaPerimetro->bp3;
                 echo (round($Porcentaje*100/6))
                @endphp %
             </td>
             <td align="center" class="border border-dark" style="font-size:12px;">

                   {{$BodegaPerimetro->bpo1}} {{$BodegaPerimetro->bpo2}} {{$BodegaPerimetro->bpo3}}

            </td>
        </tr>
    @endforeach
 </tbody>
  </table>


  <div class="page-break"></div>

  <p class="text-center" style="font-size:20px;"><strong>Resultado de la inspección</strong></p>

  <p class="text-center" style="font-size:16px;"><strong>Bodega Seca</strong></p>

  <table align="center" class="text-center border border-dark">
                 @foreach ($total as $totales)
                <tr>
                <td class="border border-dark" style="font-size:11px; width: 250px">
                       {{$totales[1]}}
                </td>
                  <td class="border border-dark" style="width: 250px">
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totales[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                          {{round($totales[0])}} %</div>
                      </div>
                </td>
            </tr>
            @endforeach

</table>


@switch($pdf->almacen)
    @case('Bodega Gye')
    <p class="text-center pt-3" style="font-size:16px;"><strong>Bodega Fria</strong></p>

  <table align="center" class="text-center border border-dark">
                 @foreach ($total1 as $totale)
                <tr>
                <td class="border border-dark" style="font-size:11px; width: 230px">
                       {{$totale[1]}}
                </td>
                  <td class="border border-dark" style="width: 250px">
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totale[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                          {{round($totale[0])}} %</div>
                      </div>
                </td>
            </tr>
                 @endforeach
</table>

<p class="text-center pt-3" style="font-size:16px;"><strong>Bodega Reefer</strong></p>


  <table align="center" class="text-center border border-dark">
                 @foreach ($total2 as $totals)
                <tr>
                <td class="border border-dark" style="font-size:11px; width: 230px">
                       {{$totals[1]}}
                </td>
                  <td class="border border-dark" style="width: 250px">
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totals[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                          {{round($totals[0])}} %</div>
                      </div>
                </td>
            </tr>
                 @endforeach
</table>
    <p class="text-center pt-3" style="font-size:16px;"><strong>Bodega Ampliacion Liris</strong></p>


    <table align="center" class="text-center border border-dark" >
                   @foreach ($total3 as $totals)
                  <tr>
                  <td class="border border-dark" style="font-size:11px; width: 230px">
                         {{$totals[1]}}
                  </td>
                    <td class="border border-dark" style="width: 250px">
                       <div class="progress">
                          <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totals[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                            {{round($totals[0])}} %</div>
                        </div>
                  </td>
              </tr>
                   @endforeach
  </table>

  <p class="text-center pt-3" style="font-size:16px;"><strong>Zona de contenedores para averia y area de tuberias</strong></p>


  <table align="center" class="text-center border border-dark">
                 @foreach ($total5 as $totals5)
                <tr>
                <td class="border border-dark" style="font-size:11px; width: 230px">
                       {{$totals5[1]}}
                </td>
                  <td class="border border-dark" style="width: 250px">
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totals5[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                          {{round($totals5[0])}} %</div>
                      </div>
                </td>
            </tr>
                 @endforeach
</table>
        @break

    @default

@endswitch

<p class="text-center pt-3" style="font-size:16px;"><strong>Andenes y Muelle de carga</strong></p>


  <table align="center" class="text-center border border-dark">
                 @foreach ($total4 as $totalsan)
                <tr>
                <td class="border border-dark" style="font-size:11px; width: 230px">
                       {{$totalsan[1]}}
                </td>
                  <td class="border border-dark" style="width: 250px">
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totalsan[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                          {{round($totalsan[0])}} %</div>
                      </div>
                </td>
            </tr>
                 @endforeach
</table>



<p class="text-center pt-3" style="font-size:16px;"><strong>Zona de bodega y perimetro del CD</strong></p>


  <table align="center" class="text-center border border-dark">
                 @foreach ($total6 as $totals6)
                <tr>
                <td class="border border-dark" style="font-size:11px; width: 230px">
                       {{$totals6[1]}}
                </td>
                  <td class="border border-dark" style="width: 250px">
                     <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{round($totals6[0])}}%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                          {{round($totals6[0])}} %</div>
                      </div>
                </td>
            </tr>
                 @endforeach
</table>
    {{-- <div class="page-break"></div>
    <h1 class="text-center pt-3">3. Registro Fotográfico</h1>
       <hr class="grosor"/>
       <div class="container pt-5">
        <div class="row">
            <div class="col-md-12 mb-2"> --}}
       {{-- @foreach ($pdf->imagenes as $imagen )
            <img src="{{public_path('storage/evidencia_muestreo/').trim($imagen->name)}}" width="200" height="200" class="img-thumbnail ">
       @endforeach --}}
    {{-- </div>
    </div>
   </div> --}}



       <footer>
        <p class="fw-bold">FCME-0036 Rev. 3</p>
       </footer>
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
