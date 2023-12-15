
<style>
    .border
    {
      border: 1rem;
    }
</style>

    <table>
        <tr>
            <td>
                <img src="img/logo.png" width="200" alt="logo">
            </td>
        </tr>
    </table>
<table class="border">
    <thead>
        <tr>
            <th align="center">
                <strong>
                #
               </strong>
            </th>
            <th align="center">
                <strong>
                Bodega
                </strong>
            </th>
            <th align="center">
                <strong>
                Cliente
               </strong>
            </th>
            <th align="center">
                <strong>
                Contenedor
                </strong>
            </th>
            <th align="center">
                <strong>
                Guias
               </strong>
            </th>
            <th align="center">
                <strong>
                Fecha recepción
                </strong>
            </th>
            <th align="center">
                <strong>
                hora Recepción
               </strong>
            </th>
            <th align="center">
                <strong>
                N° pedido
                </strong>
            </th>
            <th align="center">
                <strong>
                Responsable
               </strong>
            </th>
            <th align="center">
                <strong>
                Transportista
                </strong>
            </th>
            <th align="center">
                <strong>
                Sello de seguridad
                </strong>
            </th>
            <th align="center">
                <strong>
                Observación
            </strong>
            </th>
        </tr>
    </thead>
    <tbody>
     {{-- @foreach ($muestreos as $muestreo) --}}
         <tr>
            <td align="center">
            {{-- {{$muestreos->id}} --}}
            </td>
            <td align="center">
            {{$muestreos->bodega}}
            </td>
            <td align="center">
            {{$muestreos->clientes->social_reason}}
            </td>
            <td align="center">
            {{$muestreos->contenedor}}
            </td>
            <td align="center">
            {{$muestreos->guias}}
            </td>
            <td align="center">
            {{$muestreos->fecha_recepcion}}
            </td>
            <td align="center">
            {{$muestreos->hora_recepcion}}
            </td>
            <td align="center">
            {{$muestreos->n_pedido}}
            </td>
            <td align="center">
            {{$muestreos->responsable}}
            </td>
            <td align="center">
            {{$muestreos->transportista}}
            </td>
            <td align="center">
            {{$muestreos->sello}}
            </td>
            <td align="center">
            {{$muestreos->observacion}}
            </td>
         </tr>
     {{-- @endforeach --}}
    </tbody>
</table>

<table>
    <tr><h2>Detalle de producto</h2></tr>
    <thead>
        <tr>
            <th align="center">
                <strong>
                    Sku
                </strong>
            </th>
            <th align="center">
                <strong>
                    Sku UL
                </strong>
            </th>
            <th align="center">
                <strong>
                Descripción
                </strong>
            </th>
            <th align="center">
                <strong>
                Cantidad recibida
                </strong>
            </th>
            <th align="center">
                <strong>
                Nivel de muestreo aplicado
                </strong>
            </th>
            <th align="center">
                <strong>
            Tamaño de la Muestra
                </strong>
            </th>
            <th align="center">
                <strong>
             N° de registro sanitario
                </strong>
            </th>
            <th align="center">
                <strong>
                Registro Sanitario
                </strong>
            </th>
            <th align="center">
                <strong>
                Ean 13
                </strong>
            </th>
            <th align="center">
                <strong>
                Ean 14
                </strong>
            </th>
            <th align="center">
                <strong>
               Ean 128
                </strong>
            </th>
            <th align="center">
                <strong>
                 Vida útil  
                </strong>
            </th>
            <th align="center">
                <strong>
            Vida Útil correcta
                </strong>
            </th>
            <th align="center">
                <strong>
                    Pvp
                </strong>
            </th>
            <th align="center">
                <strong>
               Pvp correcto
                </strong>
            </th>
            <th align="center">
                <strong>
            Etiqueta diferente al producto
                </strong>
            </th>
            <th align="center">
                <strong>
                Lote, fecha elaboración y/o expiración ilegible o borrable:
                </strong>
            </th>
            <th align="center">
                <strong>
                Estatus del producto
                </strong>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($muestreos->evidencia as $Evidencias)
        <tr>
            <td align="center">
                {{$Evidencias->Data_logistica->sku_quala}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->sku_unilever}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->descripcion}}
            </td>
            <td align="center">
                {{$Evidencias->cantidad}}
            </td>
            <td align="center">
                {{$Evidencias->Tamaño_muestra->Niveles_estandar->name}}
            </td>
            <td align="center">
                {{$Evidencias->Tamaño_muestra->muestra}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->registro_sanitario}}
            </td>
            <td align="center">
                {{$Evidencias->registro_sanitario}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->ean13}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->ean14}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->ean128}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->vida_util}}
            </td>
            <td align="center">
                {{$Evidencias->vida_util}}
            </td>
            <td align="center">
                {{$Evidencias->Data_logistica->pvp}}
            </td>
            <td align="center">
                {{$Evidencias->pvp}}
            </td>
            <td align="center">
                {{$Evidencias->etiqueta_producto}}
            </td>
            <td align="center">
                {{$Evidencias->lote_fecha}}
            </td>
            <td align="center">
                {{$Evidencias->estatu_producto}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<table>
    <tr><h4>Detalle de novedades</h4></tr>
    <thead>
        <tr>
            <td align="center">
                <strong>
                sku Quala
                </strong>
            </td>
            <td align="center">
                <strong>
                Defecto
               </strong>
            </td>
            <td align="center">
                <strong>
                Clasificación
                </strong>
            </td>
            <td align="center">
                <strong>
                Aql aplicado
                </strong>
            </td>
            <td align="center">
                <strong>
                Descripción
                </strong>
            </td>
            <td align="center">
                <strong>
                Estatus del producto
                </strong>
            </td>
            <td align="center">
                <strong>
                cajas/unidades con defectos
                </strong>
            </td>
            <td align="center">
                <strong>
                Observación
                </strong>
            </td>
            <td align="center">
                <strong>
                Evidencia imagenes
               </strong>
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($muestreos->evidencia as $evidencias)
        <tr>
             <td align="center" >
               {{$evidencias->Data_logistica->sku_quala}}
               </td>  

               <td align="center" >
                   {{$evidencias->Defecto->defectos}}
               </td> 

               <td align="center" >
                   {{$evidencias->Defecto->clasificacion}}
               </td>

               <td align="center" >
                   {{$evidencias->aql_defecto->Aql}}
               </td>

               <td align="center" >
                   {{$evidencias->Defecto->descripcion}}
               </td>

               <td align="center" >
                   {{$evidencias->estatu_producto}}
               </td>

               <td align="center" >
                   {{$evidencias->caja_un}} {{$evidencias->cantidad_caja}}
               </td>

               <td align="center" >
                   {{$evidencias->observacion}}
               </td>

               <td align="center" >            
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
    </tbody>
</table>
