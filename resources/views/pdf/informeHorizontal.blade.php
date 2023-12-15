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
            margin:0cm 0cm;
        }

        body {
            margin: 3.50cm 0.50cm 1cm;
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
            left: 0cm;
            right: 0cm;
            height: 5cm;
            color: white;
            line-height: 30px;
        }
   .uppercase{
    text-transform: uppercase;
    }
     .color{
        background-color: black;
     }

     .naranja{
        color: #585858;
        margin-left: 0.90cm;
        margin-bottom: 0.60cm;
        font-size: 13px;
     }
    
      hr, .grosor{
          height: 2px;
          background-color: black;
     }
     .cabecera{
        background-color: #07AB0C
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
            line-height: 10px;
        }
    </style>

    <title>Reporte de muestreo {{$pdf->contenedor}}</title>
  </head>
  <body>
    <header>
        <img src="img/logo.png" width="300">
         <img src="img/logo3.png" width="600">
    </header>
    <div class="naranja">
        <label><strong>La información del producto detallado en este reporte corresponde exclusivamente a la muestra tomada en esta inspección.</strong></label>
     </div>
    <p class="text-center" style="font-size:35px;"><strong> Datos Generales </strong></p>
    <hr class="grosor"/>
    <div class="text-center pt-3">
    <table width="100%" cellspacing="0" cellpadding="3" >
            <tr>
                <td align="left" class="border border-dark" >
                    <strong>
                    Cliente:
                    </strong>
                </td>
                <td colspan="5" class="border border-dark text-center" >
                    {{$pdf->clientes->social_reason}}
                </td>
            </tr>
            <tr>
                <td align="left" class="border border-dark" >
                    <strong>
                    Fecha del muestreo:
                    </strong>
                </td>
                <td colspan="2" class="border border-dark text-center">
                    {{$pdf->fecha_recepcion}}
                </td>
                <td align="left" class="border border-dark" >
                    <strong>
                    N° Pedido:
                    </strong>
                </td>
                <td colspan="2" class="border border-dark text-center">
                    {{$pdf->n_pedido}}
                </td>
            </tr>
            <tr>
                <td align="left" class="border border-dark" >
                    <strong>
                    Responsable del muestreo:
                </strong>
                </td>
                <td colspan="5" class="border border-dark text-center">
                    {{$pdf->responsable}}
                </td>
            </tr>
            <tr>
                <td align="left" class="border border-dark" >
                    <strong>
                    Almacén:
                    </strong>
                </td>
                <td  class="border border-dark text-center">
                    {{$pdf->bodega}}
                </td>
                <td align="left" class="border border-dark" >
                    <strong>
                    Contenedor/Placa:
                   </strong>
                </td>
                <td class="border border-dark text-center uppercase">
                    {{$pdf->contenedor}}
                </td>
                <td align="left" class="border border-dark" >
                    <strong>
                Guia de Remisión:
                   </strong>
                </td>
                <td class="border border-dark text-center">
                    {{$pdf->guias}}
                </td>
            </tr>
    </table>
  </div>
       <p class="text-center pt-5" style="font-size:35px;"><strong> Detalle de producto muestreado </strong></p>
       <hr class="grosor"/>
        <div class="text-center">
       <table align="left" cellspacing="0" cellspacing="3">
            <tr class="cabecera text-white" align="center">
                <td colspan="18" class="border border-dark"><strong>Verificación de los Productos</strong></td>
            </tr>
            
            <tr>
                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                <strong>
                    Sku Quala:
                </strong>
                    </label>
                </td> 
                
                {{-- <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                <strong>
                    Sku UL:
                </strong>
                    </label>
                </td>     --}}
                
                <td align="center" class="border border-dark">
                    <label style="font-size:10px;">
                        <strong>
                       Descripción:
                        </strong>
                    </label>
                </td>

                <td align="center" class="border border-dark">
                    <label  class="" style="font-size:10px;">
                    <strong>
                    Cantidad Recibida:
                    </strong>
                </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                <strong>
                    Fecha vencimiento:
                </strong>
                    </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Nivel de muestreo aplicado:
                    </strong>
                    </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                  Tamaño de la Muestra:
                    </strong>
                   </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                 N° de registro sanitario:
                    </strong>
                   </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                  Ean 13:
                    </strong>
                   </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                  Ean 14:
                    </strong>
                   </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                  Ean 128:
                    </strong>
                   </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Vida Útil (Dias):
                   </strong>
                </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Vida Útil correcta:
                   </strong>
                </label>
                </td>
                
                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Pvp:
                   </strong>
                </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Pvp correcto:
                   </strong>
                </label>
                </td>
 
                <td align="center" class="border border-dark">
                <label class="" style="font-size:9px;">
                    <strong>
                    Lote, fecha elaboración y/o expiración ilegible o borrable:
                    </strong>
                </label>
                </td>

                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Etiqueta diferente al producto:
                    </strong>
                </label>
                </td>
                <td align="center" class="border border-dark">
                    <label class="" style="font-size:10px;">
                    <strong>
                    Registro Sanitario:
                    </strong>
                </label>
                </td>
              
                <td align="center" class="border border-dark">
                    <label style="font-size:10px;">
                    <strong>
                    Estatus del producto:
                    </strong>
                   </label>
                </td>
                {{-- <td align="center" class="border border-dark">
                    <label style="font-size:10px;">
                    <strong>
                    Tipo de defecto:
                    </strong>
                </label>
                </td>


                <td align="center" class="border border-dark">
                    <label style="font-size: 10px">
                    <strong>
                    Comentario u observación:
                </strong>
                 </label>
                </td> --}}
            </tr>
        

                @foreach ( $pdf->evidencia as $evidencias )
               <tr>
                <td class="border border-dark" style="font-size:12px;">
                    {{$evidencias->Data_logistica->sku_quala}}
                 </td>
                 
                 {{-- <td class="border border-dark" style="font-size:12px;">
                        {{$evidencias->Data_logistica->sku_unilever}}
                 </td> --}}

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->descripcion}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->cantidad}}
                 </td>

                 <td class="border border-dark" style="font-size:12px;">
                    {{$evidencias->fecha_vencimiento}}
                  </td> 

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Tamaño_muestra->Niveles_estandar->name}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Tamaño_muestra->muestra}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->registro_sanitario}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->ean13}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->ean14}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->ean128}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->vida_util}}
                  </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->vida_util}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Data_logistica->pvp}}
                  </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                   {{$evidencias->pvp}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->lote_fecha}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->etiqueta_producto}}
                 </td>
                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->registro_sanitario}}
                 </td>

                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->estatu_producto}}
                 </td>

                 {{-- <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->tipo_efecto}}
                 </td>


                 <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->observacion}}
                 </td> --}}
               </tr>
               @endforeach
            
       </table>
    </div>

    <div class="page-break"></div>
    <p class="text-center " style="font-size:35px;"><strong> Estatus de Producto </strong></p>
       <hr class="grosor"/>
       {{-- <div class="container pt-5">
        <div class="row">
            <div class="col-md-12 mb-2">
       @foreach ($pdf->imagenes as $imagen )
            <img src="{{public_path('storage/evidencia_muestreo/').trim($imagen->name)}}" width="200" height="200" class="img-thumbnail "> 
       @endforeach
    </div>
    </div>
   </div> --}}
   <div class="text-center">
    <table align="left" cellspacing="0" cellspacing="3">
         <tr class="cabecera text-white" align="center">
             <td colspan="9" class="border border-dark"><strong>Detalle de novedades</strong></td>
         </tr>
         <tr>
            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Sku:
            </strong>
                </label>
            </td>

            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Defecto:
            </strong>
                </label>
            </td>

            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Clasificación:
            </strong>
                </label>
            </td>

            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                AQL Aplicado:
            </strong>
                </label>
            </td>

            {{-- <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Ac/Rec:
            </strong>
                </label>
            </td> --}}

            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
               Descripción:
            </strong>
                </label>
            </td>
            
            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Estatus del producto:
            </strong>
                </label>
            </td>

            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                cajas/unidades con defectos:
            </strong>
                </label>
            </td>

            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Observaciones:
            </strong>
                </label>
            </td>
            
            <td align="center" class="border border-dark">
                <label class="" style="font-size:10px;">
            <strong>
                Evidencia Imagenes:
            </strong>
                </label>
            </td>

         </tr>
         @foreach ($pdf->evidencia as $evidencias)
         <tr>
              <td class="border border-dark text-center" style="font-size:12px;">
                {{$evidencias->Data_logistica->sku_quala}}
                </td>  

                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Defecto->defectos}}
                </td> 

                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Defecto->clasificacion}}
                </td>

                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->aql_defecto->Aql}}
                </td>

                {{-- <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->aql_defecto->Ac}} {{$evidencias->aql_defecto->rec}}
                </td> --}}
 
                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->Defecto->descripcion}}
                </td>

                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->estatu_producto}}
                </td>

                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->caja_un}} {{$evidencias->cantidad_caja}}
                </td>

                <td class="border border-dark text-center" style="font-size:12px;">
                    {{$evidencias->observacion}}
                </td>

                <td class="border border-dark text-center" style="width: 500px">
                    <div class="row">
                    <div class="col-md-4 mb-4 mt-3">
                    @foreach ($evidencias->file_muestreo as $imagen )  
                    <img src="{{public_path('storage/evidencia_muestreo/').trim($imagen->name)}}" width="100" height="100" class="img-thumbnail">   
                    @endforeach 
                    </div>
                    </div>
                </td>
         </tr>
         @endforeach
         
    </table>
   </div>
       <footer>
        <p class="fw-bold">FCME-0174
            Rev. 02 </p>
       </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
