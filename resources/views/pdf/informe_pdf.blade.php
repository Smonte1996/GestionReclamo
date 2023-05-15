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
            margin: 0.60cm 0cm 0cm;
        }

        body {
            margin: 2cm 1cm 1cm;
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
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 5cm;
            color: #05941d;
            line-height: 50px;
        }

     .color{
        background-color: black;
     }
     .naranja{
        background-color: orange;
     }
    
      hr, .grosor{
          height: 2px;
          background-color: black;
     }
     .cabecera{
        background-color: #a6e7a9;
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

    <title>Informe Muestreo</title>
  </head>
  <body>
    <header>
        <img src="img/logo.png" width="200">
         <img src="img/Gestion_reclamo.png" width="400">
    </header>
    {{-- <h1 class="text-center">1. Datos Generales</h1>
    <hr class="grosor"/> --}}
    <fieldset class="border border-2 border-dark">
        <legend class="rounded w-50 d-none d-sm-block float-none verde text-white ps-5 ms-4">Informacación general</legend>
        <legend class="rounded float-none d-sm-none verde text-white fs-6 p-1">Informacación general</legend>  
    <div class="text-center pt-4 m-2">   
    <table width="100%" class="pt-3" cellspacing="1" cellpadding="2" >
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                    N° ticket:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->codigo_generado}}
                </td>

                <td align="left" class="" style="font-size:12px;">
                    <strong>
                   Sede:
                </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->sede->name}}
                </td>
            </tr>
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                   Cliente:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->cliente}}
                </td>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                    Tipo:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->tipo_reclamo->name}}
                </td>
            </tr>
            
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                   Causal general:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->clasificacion->causal_general->name}}
                </td>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                    Detalle causal:
                   </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->clasificacion->detalle_causal->name}}
                </td>
            </tr>
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                Titulo:
                   </strong>
                </td>
                <td colspan="5" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->titulo}}
                </td>
            </tr>
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                Descripción:
                   </strong>
                </td>
                <td colspan="5" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$Solicitudes->Descripcion}}
                </td>
            </tr>
    </table>
  </div>
</fieldset>
      <fieldset class="border border-2 border-dark mt-4">
        <legend class="rounded w-50 d-none d-sm-block float-none verde text-white ps-5 ms-4">Tratamiento del reclamo</legend>
        <legend class="rounded float-none d-sm-none verde text-white fs-6 p-1">Tratamiento del reclamo</legend>
        <div class="text-center mt-4 m-2">
       <table width="100%" class="mb-3" > 
            <tr>
                <td align="left" class="border-bottom border-dark">
                    <label  style="font-size:12px;">
                <strong>
                    Correción:
                </strong>
                    </label>
                </td>
                <td colspan="5" class="text-center border-bottom border-dark">
                  <label class="" style="font-size:12px;">
                     {{$Solicitudes->investigacion->correccion}}
                    </label>
                </td>         
            </tr>  
                <tr>
                <td align="left" class="border-bottom border-dark">
                    <label style="font-size:12px;">
                        <strong>
                       Causa raíz:
                        </strong>
                    </label>
                </td>
                <td colspan="5" class="border-bottom border-dark text-center">
                <label style="font-size:12px;">
                {{$Solicitudes->investigacion->causa_raiz}}
                </label>
                </td>
             </tr>
             <tr>
                <td align="left" class="border-bottom border-dark">
                    <label style="font-size:12px;">
                    <strong>
                    Coordinador Responsable:
                    </strong>
                </label>
                </td>
                <td colspan="5" class="border-bottom border-dark text-center">
                 <label style="font-size:12px;">
                 {{$Solicitudes->investigacion->correccion}}
                 </label>
                </td>
            </tr>
       </table>
       <legend class="rounded w-50 d-none d-sm-block float-none gris text-white ps-5 ms-4">Análisis causa - Metodologia Ishikawa</legend>
        <legend class="rounded float-none d-sm-none gris text-white fs-6 p-1">Análisis causa - Metodologia Ishikawa</legend>
       <table width="100%">
             <tr>
                <td align="center" class="grisclaro rounded">
                    <label style="font-size:12px;">
                    <strong>
                    Categoria:
                    </strong>
                    </label>
                </td>

                <td align="center" class="grisclaro rounded">
                    <label class="" style="font-size:12px;">
                    <strong>
                     Causa:
                    </strong>
                   </label>
                </td>
            </tr>
            <tr>
            <td>
               <label style="font-size:12px;">
                @foreach ( $Solicitudes->ishikawa as  $Solicitude)
                <ul class="border-bottom border-dark">
                <li>{{$Solicitude->categoria}}</li>
            </ul>
                @endforeach
                </label> 
            </td>
            <td>
                <label style="font-size:12px;">
                    @foreach ( $Solicitudes->ishikawa as  $Solicitude)
                    <ul class="border-bottom border-dark">
                    <li class="list-group">{{$Solicitude->causa}}</li>
                </ul>
                    @endforeach
                    </label> 
            </td>
            </tr>
       </table>
       <legend class="rounded w-50 d-none d-sm-block float-none gris text-white ps-5 ms-4">Análisis causa - efecto: 5 porqués</legend>
        <legend class="rounded float-none d-sm-none gris text-white fs-6 p-1">Análisis causa - efecto: 5 porqués</legend>
       <table width="100%" class="mb-3">
        <tr>
                <td align="center" class="grisclaro">
                    <label class="" style="font-size:12px;">
                    <strong>
                    Por que 1:
                   </strong>
                </label>
                </td>

                <td align="center" class="grisclaro">
                    <label class="" style="font-size:12px;">
                    <strong>
                    Por que 2:
                   </strong>
                </label>
                </td>
 
                <td align="center" class="grisclaro">
                <label class="" style="font-size:12px;">
                    <strong>
                    Por que 3:
                    </strong>
                </label>
                </td>
            

                <td align="center" class="grisclaro">
                    <label class="" style="font-size:12px;">
                    <strong>
                    Por que 4:
                    </strong>
                </label>
                </td>
              
                <td align="center" class="grisclaro">
                    <label style="font-size:12px;">
                    <strong>
                    Por que 5:
                    </strong>
                </label>
                </td>
        </tr>
            @foreach ($Solicitudes->Analisis as  $Solicitude)
            <tr>
            <td class="border-bottom border-dark">
                    <label  style="font-size:12px;">
                    <ul >
                    <li >{{$Solicitude->porque1}}</li>
                    </ul>
                     </label> 
            </td>
            <td class="border-bottom border-dark">
                    <label  style="font-size:12px;">
                    <ul>
                    <li class="list-group">{{$Solicitude->porque2}}</li>
                    </ul>
                    </label> 
            </td>
            <td class="border-bottom border-dark">
                    <label style="font-size:12px;">
                    <ul>
                    <li class="list-group">{{$Solicitude->porque3}}</li>
                    </ul>
                    </label> 
            </td>
            <td class="border-bottom border-dark">
                    <label style="font-size:12px;">
                    <ul>
                    <li class="list-group">{{$Solicitude->porque4}}</li>
                    </ul>
                    </label> 
            </td>
            <td class="border-bottom border-dark">
                    <label style="font-size:12px;">
                    <ul>
                    <li class="list-group">{{$Solicitude->porque5}}</li>
                    </ul>
                    </label> 
            </td>
        </tr>
            @endforeach
       </table>
       <legend class="rounded w-50 d-none d-sm-block float-none gris text-white ps-5 ms-4">Planes de acciones</legend>
       <legend class="rounded float-none d-sm-none gris text-white fs-6 p-1">Planes de acciones</legend>
        <table width="100%" class="mb-5">
            <tr>
                <td align="center" class="grisclaro">
                    <label style="font-size:12px;">
                    <strong>
                    Acciones:
                    </strong>
                   </label>
                </td>

                <td align="center" class="grisclaro">
                    <label style="font-size: 12px">
                    <strong>
                    Responsable:
                </strong>
                 </label>
                </td>
                <td align="center" class="grisclaro">
                    <label style="font-size: 12px">
                    <strong>
                    Fecha programada:
                </strong>
                 </label>
                </td>
            </tr>
            @foreach ( $Solicitudes->acciones as $solicitude )
            <tr>
                <td class="border-bottom border-dark">
                    <label style="font-size:12px;">
                    <ul>
                    <li class="">{{$solicitude->name}}</li>
                    </ul>
                    </label> 
            </td>
            <td class="border-bottom border-dark">
                <label style="font-size:12px;">
                <ul>
                <li class="list-group">{{$solicitude->userse->name}}</li>
                </ul>
                </label> 
            </td>
            <td class="border-bottom border-dark">
                <label style="font-size:12px;">
                <ul>
                <li class="list-group">{{$solicitude->fecha_programacion->format('d/m/y')}}</li>
                </ul>
                </label> 
           </td>
            </tr>
            @endforeach
       </table>
       <legend class="rounded w-50 d-none d-sm-block float-none gris text-white ps-5 ms-4">Eficacia</legend>
       <legend class="rounded float-none d-sm-none gris text-white fs-6 p-1">Eficacia</legend>
       <table width="100%" class="mb-3">
       <tr>
        <td align="center" class="grisclaro">
            <label style="font-size:12px;">
            <strong>
             Evaluación:
            </strong>
           </label>
        </td>
        <td align="center" class="grisclaro">
            <label style="font-size:12px;">
            <strong>
             Responsable:
            </strong>
           </label>
        </td>
        <td align="center" class="grisclaro">
            <label style="font-size:12px;">
            <strong>
             Fecha estimada:
            </strong>
           </label>
        </td>
       </tr>
       <tr>
        <td class="border-bottom border-dark text-center">
            <label style="font-size:12px;">
            {{$Solicitudes->investigacion->evaluacion_eficacia}}
            </label>
            </td>

            <td class="border-bottom border-dark text-center">
                <label style="font-size:12px;">
            {{$Solicitudes->investigacion->user->name}}
                </label>
                </td>

            <td class="border-bottom border-dark text-center">
                <label style="font-size:12px;">
                {{$Solicitudes->investigacion->fecha_programada->format('d/m/y')}}
                </label>
                </td>
       </tr>
       </table>
       <legend class="rounded w-50 d-none d-sm-block float-none gris text-white ps-5 ms-4">Resultado de Eficacia</legend>
       <legend class="rounded float-none d-sm-none gris text-white fs-6 p-1">Resultado de Eficacia</legend>
       <table width="100%">
        <tr>
            <td align="center" class="grisclaro">
                <label style="font-size:12px;">
                <strong>
                 Resultado obtenido:
                </strong>
               </label>
            </td>
            <td align="center" class="grisclaro">
                <label style="font-size:12px;">
                <strong>
                 Fecha Cierre:
                </strong>
               </label>
            </td>
            <td align="center" class="grisclaro">
                <label style="font-size:12px;">
                <strong>
                 Cumplimiento:
                </strong>
               </label>
            </td>
        </tr>
        <tr>
            <td class="border-bottom border-dark text-center">
            <label style="font-size:12px;">
            {{$Solicitudes->investigacion->observacion}}
            </label>
            </td>
            <td class="border-bottom border-dark text-center">
            <label style="font-size:12px;">
            {{$Solicitudes->investigacion->date_check}}
            </label>
            </td>
            <td class="border-bottom border-dark text-center">
            <label style="font-size:12px;">
            {{$Solicitudes->investigacion->cumplimiento}}
            </label>
            </td>
        </tr>
       </table>
    </div>
</fieldset>

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



       {{-- <footer>
        <p class="fw-bold">FCME-0174
            Rev. 02 </p>
       </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
