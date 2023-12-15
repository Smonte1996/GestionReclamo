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

    <title>Checklist de Transporte {{$pdf->contenedor}}</title>
  </head>
  <body>
    <header>
        <img src="img/logo.png" width="200">
         <img src="img/logoprincipal.png" width="400">
    </header>
    {{-- <h1 class="text-center">1. Datos Generales</h1>
    <hr class="grosor"/> --}}
     <fieldset class="border border-2 border-dark">
        <legend class="rounded w-50 d-none d-sm-block float-none verde text-white ps-5 ms-4">Informacación general</legend>
        <legend class="rounded float-none d-sm-none verde text-white fs-6 p-1">Informacación general</legend>  
    <div class="text-center pt-4 m-2">   
    <table width="100%" class="pt-3" cellspacing="0" cellpadding="3" >
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                    Nombre responsable:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                     {{$pdf->responsable}}
                </td>

                <td align="left" class="" style="font-size:12px;">
                    <strong>
                   Sede:
                </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$pdf->bodega}}
                </td>
            </tr>
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                   Cliente:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$pdf->clientes->social_reason}} 
                </td>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                    Contenedor/Placa:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$pdf->contenedor}}
                </td>
            </tr>
            
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                   Fecha recepción:
                    </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                     {{$pdf->fecha_recepcion}}
                </td>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                    Hora recepción:
                   </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{date("H:m A",strtotime($pdf->hora_recepcion))}}
                </td>
            </tr>
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                Nombre del Transportista:
                   </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$pdf->transportista}}
                </td>
            
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                Sello de seguridad:
                   </strong>
                </td>
                <td colspan="2" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$pdf->sello}}
                </td>
            </tr> 
            <tr>
                <td align="left" class="" style="font-size:12px;">
                    <strong>
                Observación:
                   </strong>
                </td>
                <td colspan="5" class="border-bottom border-dark text-center" style="font-size:12px;">
                    {{$pdf->observacion}}
                </td>
            </tr> 
    </table>
  </div>
</fieldset>

<table class="table-responsive col-sm-12 col-md-12 mt-5" width="100%">
   
        <tr align="left">
            <td colspan="2" class="border-botton border-dark" style="font-size:14px;"><strong>Verificación General</strong></td>
        </tr>
        <tr>
      <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
        <strong>
       1. El transporte tiene protección (carpa, furgón). 
       </strong>  
    </td> 
      <td  class="border border-dark text-center" style="font-size:12px;">
        {{$pdf->Checklist->vr1}}
      </td>
       </tr>
       <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         2. No se presentan olores fuera de lo normal.
         </strong>  
      </td> 
        <td  class="border border-dark text-center" style="font-size:12px;">
            {{$pdf->Checklist->vr2}}
        </td>
         </tr>
         <tr>
            <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
              <strong>
             3. Piso del contedor, furgón, en buenas condiciones y seco.  
             </strong>  
    </td> 
      <td  class="border border-dark text-center" style="font-size:12px;">
          {{$pdf->Checklist->vr3}}
      </td>
       </tr>
       <tr>
          <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
            <strong>
           4. Ausencia de orificios en el cajón. 
           </strong>  
        </td> 
          <td  class="border border-dark text-center" style="font-size:12px;">
              {{$pdf->Checklist->vr4}}
          </td>
           </tr>
           <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         5. Limpieza del contenedor, furgón (piso, paredes, techo). 
         </strong>  
      </td> 
        <td  class="border border-dark text-center" style="font-size:12px;">
            {{$pdf->Checklist->vr5}}
        </td>
         </tr>
         <tr>
            <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
              <strong>
             6. Ausencia de plagas.
             </strong>  
          </td> 
            <td  class="border border-dark text-center" style="font-size:12px;">
                            {{$pdf->Checklist->vr6}}
         </td>
          </tr>
          <tr>
             <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
               <strong>
              7. Ausencia de quimicos y/o sustancias contaminantes (Combustible, solventes, aceites, entre otros). 
              </strong>  
           </td> 
             <td  class="border border-dark text-center" style="font-size:12px;">
                 {{$pdf->Checklist->vr7}}
             </td>
              </tr>
    
    </table>

    <table class="table-responsive col-sm-12 col-md-12 mt-3" width="100%">
            
     <tr align="left">
         <td colspan="1" class="border-botton border-dark" style="font-size:14px;"><strong>Verificación en el descargue</strong></td>
     </tr>
     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
         1. Puerta tiene el sello de seguidad. 
         </strong>  
     </td> 
         <td  class="border border-dark text-center" style="font-size:12px;">
         {{$pdf->checklist->vd1}}
         </td>
         </tr>

     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
         2. Carga en buen estado (no rota, abierta, en mal estado, húmeda). 
         </strong>  
     </td> 
         <td  class="border border-dark text-center" style="font-size:12px;">
             {{$pdf->checklist->vd2}}
         </td>
         </tr>

     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
         3. Cumple correcto estibaje de PT (se cumple el apile PT). 
         </strong>  
     </td> 
         <td  class="border border-dark text-center" style="font-size:12px;">
             {{$pdf->checklist->vd3}}
         </td>
         </tr>

     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
         4. Mantiene condiciones de embalaje (pallets en buen estado, strech film cubre el PT). 
         </strong>  
     </td> 
         <td  class="border border-dark text-center" style="font-size:12px;">
             {{$pdf->checklist->vd4}}
         </td>
         </tr>

     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
         5. Cumple orden en la carga. 
         </strong>  
     </td> 
         <td  class="border border-dark text-center" style="font-size:12px;">
             {{$pdf->checklist->vd5}}
         </td>
         </tr>

     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
         6. No existe derrame de producto terminado, materias primas o material de empaque. 
         </strong>  
     </td> 
         <td  class="border border-dark text-center" style="font-size:12px;">
             {{$pdf->checklist->vd6}}
         </td>
         </tr>

  <tr>
      <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
      <strong>
      7. Libre  de contaminación cruzada fisica, quimica y/o biológica. 
      </strong>  
  </td> 
      <td  class="border border-dark text-center" style="font-size:12px;">
          {{$pdf->checklist->vd7}}
      </td>
      </tr>

  {{-- <tr>
      <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
      <strong>
      8. ME/MP ingreso con certificados de calidad. 
      </strong>  
  </td> 
      <td  class="border border-dark text-center">
          {{$pdf->checklist->vd8}}
      </td>
      </tr> --}}

 <tr>
     <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
     <strong>
     9. El material tiene minimo 70% de vida útil. 
     </strong>  
 </td> 
     <td  class="border border-dark text-center" style="font-size:12px;">
         {{$pdf->checklist->vd9}}
     </td>
     </tr>
            
    </table>

    <div class="page-break"></div>

    <p class="text-center" style="font-size:25px;"><strong> Detalle de producto recibido</strong></p>
    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3" style="font-size:12px;">
        <thead>
        <tr>
            <td class="border border-dark text-center">
                <strong>
                    Sku Quala
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Descripción
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Cantidad
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Fecha Vencimiento
                </strong>
            </td>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($pdf->evidencia as $Evidencias )
        <tr >
           <td class="border border-dark text-center">
            {{$Evidencias->Data_logistica->sku_quala}}
           </td>

           <td class="border border-dark text-center">
            {{$Evidencias->Data_logistica->descripcion}}
           </td>

           <td class="border border-dark text-center">
            {{$Evidencias->cantidad}}
           </td>

           <td class="border border-dark text-center">
            {{$Evidencias->fecha_vencimiento}}
           </td>
        </tr>
        @endforeach
        
    </tbody>
    </table>

    <p class="text-center pt-3" style="font-size:25px;"><strong> Detalle de producto defectuoso</strong></p>
    <p class="text-center" style="font-size: 12px;">Producto defectusoso detectado durante la descarga.</p>
       <hr class="grosor"/>
     
    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3" style="font-size:12px;">
        <thead>
        <tr>
            <td class="border border-dark text-center">
                <strong>
                    Sku Quala
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Descripción
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Cantidad
                </strong>
            </td>
            {{-- <td class="border border-dark text-center">
                <strong>
                   Fecha de vencimiento
                </strong>
            </td> --}}
            <td class="border border-dark text-center">
                <strong>
                    Defectos
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Observación
                </strong>
            </td>
            <td class="border border-dark text-center">
                <strong>
                    Evidencia fotografica
                </strong>
            </td>
        </tr>
    </thead>
    <tbody>
        @forelse ($pdf->Defecto as $defectos )
        <tr >
           <td class="border border-dark">
            {{$defectos->sku->sku_quala}}
           </td>

           <td class="border border-dark">
            {{$defectos->sku->descripcion}}
           </td>

           <td class="border border-dark">
            {{$defectos->cantidades}} {{$defectos->caja_uni}}
           </td>

           {{-- @if ($pdf->evidenecia->Data_logistica->sku_quala == $pdf->Defecto->sku->sku_quala) --}}
           {{-- <td class="border border-dark">
            @foreach($defectos->Evidencias as $Evidencia)
            {{$Evidencia->fecha_vencimiento}}
             @endforeach
            </td> 
            @endif --}}
           

           <td class="border border-dark">
            {{$defectos->estado}}
           </td>

           <td class="border border-dark">
            {{$defectos->observacion}}
           </td>

           <td class="border border-dark" style="width: 300px;">
            <div class="row">
            <div class="col-md-3 mb-4 mt-3">
            @foreach ($defectos->Imagen_check as $imagenes)
                <img src="{{public_path('storage/evidencia_defectos/').trim($imagenes->name)}}" alt="Imagen del defectos transporte" width="100" height="100" class="img-thumbnail">
            @endforeach
            </div>
            </div>
           </td>
        </tr>
        @empty
        <tr>
       <td colspan="7" class="border border-dark text-center">
        No Aplica 
       </td>  
       </tr> 
     @endforelse
        
    </tbody>
    </table>
       
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
