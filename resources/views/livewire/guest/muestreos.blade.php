<div>
    <div class="row">
    <div class="container pt-5 d-flex justify-content-center mb-5">
      <div class="border rounded shadow p-5 col-sm-12 col-md-10">
        <div class="rounded float-star pb-3 col-sm-6 col-md-12">
                <img src="{{asset('img/logo.png')}}" width="200" alt="{{'Imagen del logo'}}">
                  <img src="{{asset('img/checklist.png')}}" width="550" alt="{{'imagen de logo centro'}}">
        </div>
        <div class="clearfix"></div>
          <div class="row mt-4">
          <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label  
                    class="form-label text-lead-500 fw-bold" for="bodega" class="text-center" style="font-size:14px;">Almacen:
                </label>
                    <select class="form-control @error('bodega') is-invalid @enderror" wire:model.defer="bodega" id="bodega" :value="old('bodega')">
                       <option value="">Seleccionar una opción</option>
                       <option value="BODEGA GYE">BODEGA GYE</option>
                       <option value="BODEGA UIO">BODEGA UIO</option> 
                    </select>
                    @error('bodega')
                    <small id="bodegahelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                    @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="clientes" style="font-size:14px;">Cliente:
                </label>
                    <select class="form-control @error('clientes') is-invalid @enderror" wire:model.defer="clientes" id="clientes" :value="old('clientes')">
                        <option value="">Seleccionar una opción</option>
                        @foreach ( $cliente as $clientes )
                        <option value="{{$clientes->id}}">{{$clientes->social_reason}}</option>
                        @endforeach
                     </select>
                     @error('clientes')
                    <small id="clienteshelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                    @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="contenedor" style="font-size:14px;">Contenedor/placa:
                </label>
                   <input type="text" class="form-control uppercase @error('contenedor') is-invalid @enderror" id="contenedor" wire:model.defer='contenedor' :value="old('contenedor')">
                   @error('contenedor')
                    <small id="contenedorhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                    @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="Guia" style="font-size:14px;">Guia de remisión:
                </label>
                   <input type="text" class="form-control @error('Guia') is-invalid @enderror" wire:model.defer='Guia' id="Guia" :value="old('Guia')">
                     @error('Guia')
                     <small id="GuiarhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                     @enderror                  
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label
                    class="form-label text-lead-500 fw-bold" for="fecha_recepcion" style="font-size:14px;">Fecha de recepción:
                </label>
                   <input type="date" class="form-control @error('fecha_recepcion') is-invalid @enderror" wire:model.defer="fecha_recepcion" id="fecha_recepcion" :value="old('fecha_recepcion')">
                   @error('fecha_recepcion')
                   <small id="fecha_recepcionrhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror 
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="hora_recepcion" style="font-size:14px;">Hora de recepción:
                </label>
                   <input type="time" class="form-control @error('hora_recepcion') is-invalid @enderror" wire:model.defer='hora_recepcion' id="hora_recepcion" :value="old('hora_recepcion')">
                   @error('hora_recepcion')
                   <small id="hora_recepcionrhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror 
            </div>
        </div>
        {{-- <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label
                    class="form-label text-lead-500 fw-bold" for="pedido" style="font-size:14px;">N° pedido (según aplique):
                </label>
                   <input type="text" class="form-control @error('pedido') is-invalid @enderror" wire:model.defer="pedido" id="pedido" :value="old('pedido')">
                   @error('pedido')
                   <small id="pedidorhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror
            </div>
        </div> --}}
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="responsable" style="font-size:14px;">Responsable de validación:
                </label>
                   <input type="text" class="form-control @error('responsable') is-invalid @enderror" placeholder="TU NOMBRE" wire:model.defer="responsable" id="responsable" :value="old('responsable')">
                   @error('responsable')
                   <small id="responsablerhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="transportista" style="font-size:14px;">Nombre del transportista:
                </label>
                   <input type="text" class="form-control @error('transportista') is-invalid @enderror"  wire:model.defer="transportista" id="transportista" :value="old('transportista')">
                   @error('transportista')
                   <small id="transportistarhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="sello" style="font-size:14px;">Sello de seguridad:
                </label>
                   <input type="text" class="form-control @error('sello') is-invalid @enderror"  wire:model.defer="sello" id="sello" :value="old('sello')">
                   @error('sello')
                   <small id="sellorhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-8">
            <div class="mb-2">
                <label 
                    class="form-label text-lead-500 fw-bold" for="comentario" style="font-size:14px;">Observación:
                </label>
                   <input type="text" class="form-control @error('comentario') is-invalid @enderror"  wire:model.defer="comentario" id="comentario" :value="old('comentario')">
                   @error('comentario')
                   <small id="comentariorhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small> 
                   @enderror
            </div>
        </div>
    </div>

    @if (!is_null($Muestreos))

    @else
    <table class="table-responsive col-sm-12 col-md-12 mt-5" width="100%">
    <thead>
        <tr align="center">
            <td colspan="1" class="border border-dark" style="font-size:14px;"><strong>Verificación General</strong></td>
        </tr>
        <tr>
      <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
        <strong>
       1. El transporte tiene protección (carpa, furgón). 
       </strong>  
    </td> 
      <td  class="border border-dark">
        <select name="" id="vr1" wire:model.defer="vr1" class="form-control">
            <option value="">Selecionar una opción</option>
            <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
        </select>
      </td>
       </tr>
       <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
    <strong>
       2. No se presentan olores fuera de lo normal.
       </strong>  
    </td> 
      <td  class="border border-dark">
        <select name="" id="vr2" wire:model.defer="vr2" class="form-control">
            <option value="">Selecionar una opción</option>
            <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
      </select>
    </td>
     </tr>
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         3. Piso del contedor, furgón, en buenas condiciones y seco.  
         </strong>  
      </td> 
        <td  class="border border-dark">
          <select name="" id="vr3" wire:model.defer="vr3" class="form-control">
      <option value="">Selecionar una opción</option>
      <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
      </select>
    </td>
     </tr>
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
       4. Ausencia de orificios en el cajón. 
       </strong>  
    </td> 
      <td  class="border border-dark">
        <select name="" id="vr4" wire:model.defer="vr4" class="form-control">
            <option value="">Selecionar una opción</option>
            <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
        </select>
      </td>
       </tr>
       <tr>
          <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
                    <strong>
       5. Limpieza del contenedor, furgón (piso, paredes, techo). 
       </strong>  
    </td> 
            <td  class="border border-dark">
     <select name="" id="vr5" wire:model.defer="vr5" class="form-control">
         <option value="">Selecionar una opción</option>
         <option value="Cumple">Cumple</option>
         <option value="No cumple"> No cumple</option>
         <option value="No aplica">No aplica</option>
      </select>
    </td>
     </tr>
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         6. Ausencia de plagas.
         </strong>  
    </td> 
    <td  class="border border-dark">
    <select name="" id="vr6" wire:model.defer="vr6" class="form-control">
     <option value="">Selecionar una opción</option>
     <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
     </select>
    </td>
     </tr>
     <tr>
    <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
      <strong>
     7. Ausencia de quimicos y/o sustancias contaminantes (Combustible, solventes, aceites, entre otros). 
     </strong>  
     </td> 
       <td  class="border border-dark">
         <select name="" id="vr7" wire:model.defer="vr7" class="form-control">
         <option value="">Selecionar una opción</option>
         <option value="Cumple">Cumple</option>
         <option value="No cumple"> No cumple</option>
         <option value="No aplica">No aplica</option>
         </select>
    </td>
       </tr>
    </thead>
      </table>
    
    <table class="table-responsive col-sm-12 col-md-12 mt-5" width="100%">
    <thead>
     <tr align="center">
         <td colspan="1" class="border border-dark" style="font-size:14px;"><strong>Verificación en el descargue</strong></td>
     </tr>
     <tr>
         <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
           <strong>
          1. Puerta tiene el sello de seguidad. 
          </strong>  
       </td> 
         <td  class="border border-dark">
           <select name="" id="vd1" wire:model.defer="vd1" class="form-control">
               <option value="">Selecionar una opción</option>
               <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
           </select>
         </td>
          </tr>
    
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         2. Carga en buen estado (no rota, abierta, en mal estado, húmeda). 
         </strong>  
      </td> 
        <td  class="border border-dark">
          <select name="" id="vd2" wire:model.defer="vd2" class="form-control">
              <option value="">Selecionar una opción</option>
              <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
          </select>
        </td>
         </tr>
    
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         3. Cumple correcto estibaje de PT (se cumple el apile PT). 
         </strong>  
      </td> 
        <td  class="border border-dark">
          <select name="" id="vd3" wire:model.defer="vd3" class="form-control">
              <option value="">Selecionar una opción</option>
              <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
          </select>
        </td>
         </tr>
    
    <tr>
       <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
        4. Mantiene condiciones de embalaje (pallets en buen estado, strech film cubre el PT). 
        </strong>  
     </td> 
       <td  class="border border-dark">
         <select name="" id="vd4" wire:model.defer="vd4" class="form-control">
             <option value="">Selecionar una opción</option>
             <option value="Cumple">Cumple</option>
             <option value="No cumple"> No cumple</option>
             <option value="No aplica">No aplica</option>
         </select>
       </td>
        </tr>
    
    <tr>
       <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
        5. Cumple orden en la carga. 
        </strong>  
     </td> 
       <td  class="border border-dark">
         <select name="" id="vd5" wire:model.defer="vd5" class="form-control">
             <option value="">Selecionar una opción</option>
             <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
         </select>
       </td>
        </tr>
    
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         6. No existe derrame de producto terminado, materias primas o material de empaque. 
         </strong>  
      </td> 
        <td  class="border border-dark">
          <select name="" id="vd6" wire:model.defer="vd6" class="form-control">
              <option value="">Selecionar una opción</option>
              <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
          </select>
        </td>
         </tr>
    
    <tr>
       <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
        7. Libre  de contaminación cruzada fisica, quimica y/o biológica. 
        </strong>  
     </td> 
       <td  class="border border-dark">
         <select name="" id="vd7" wire:model.defer="vd7" class="form-control">
             <option value="">Selecionar una opción</option>
             <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
         </select>
       </td>
        </tr>
    
    {{-- <tr>
       <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
         <strong>
        8. ME/MP ingreso con certificados de calidad. 
        </strong>  
     </td> 
       <td  class="border border-dark">
         <select name="" id="vd8" wire:model.defer="vd8" class="form-control">
             <option value="">Selecionar una opción</option>
             <option value="CUMPLE">Cumple</option>
             <option value="NO CUMPLE"> No cumple</option>
             <option value="No aplica">No aplica</option>
         </select>
       </td>
        </tr> --}}
    
     <tr>
        <td align="left" class="border border-dark" style="font-size:12px; width: 480px">
          <strong>
         9. El material tiene minimo 70% de vida útil. 
         </strong>  
      </td> 
        <td  class="border border-dark">
          <select name="" id="vd9" wire:model.defer="vd9" class="form-control">
              <option value="">Selecionar una opción</option>
              <option value="Cumple">Cumple</option>
            <option value="No cumple"> No cumple</option>
            <option value="No aplica">No aplica</option>
          </select>
        </td>
         </tr>
         </thead>
     </table>
     @endif
    
   <div class="row">
    <div class="text-center mb-3 mt-5">
        @if (!is_null($Muestreos))
            <span class="text-center">Hacer el respectivo Muestreo</span>
        @else
        <button type="button" class="btn bg-green-600 text-white" wire:click.prevent="RegistrarInfor"> Muestrear</button>
        @endif
    </div>
    
      <div class="text-end col-sm-12 col-md-12 mb-4">
        <button class="btn bg-orange-600 text-white" data-bs-toggle="modal"
        data-bs-target="#exampleModal">Tabla Militar Estandar</button>
    </div>
</div>

<div class="clearfix"></div>

 <div class="row"> 
    <div class="border table-responsive col-sm-12 col-md-12 justify-content-center mb-3" >
        <table class="mt-4 table-bordered border text-center">
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                 Sku
                </th>
                <td>
                    <div wire:ignore>
                        <select class="form-control Selector @error('sku') is-invalid @enderror" wire:model='sku' id="sku" style="width: 190px"> 
                        <option>Seleccione una opción</option>
                        @foreach ( $data_logis as $data_logi )
                            <option value="{{$data_logi->id}}">{{$data_logi->sku_quala}}</option>
                        @endforeach
                      </select>
                    </div>
                </td>
                <th class="text-center" style="font-size:12px;">
                    Sku Unilever
                </th>
                <td>
                    <label class="form-label text-center" style="width: 180px">
                        @if (!is_null($sku))
                            @foreach ( $datas as $data )
                                {{$data->sku_unilever}}
                            @endforeach
                        @endif
                      </label> 
                </td>
            </tr>
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Cantidad recibida
                </th>
                <td>
                    <input type="number" class="form-control @error('cantidad') is-invalid @enderror" wire:model.lazy="cantidad" id="cantidad" style="width: 190px" >
                </td>
                <th class="text-center" style="font-size:12px;">
                    Descripción del <br> Producto
                </th>
                <td>
                    <label class="form-label text-center" style="width: 200px">
                        @if (!is_null($sku))
                            @foreach ( $datas as $data )
                                {{$data->descripcion}}
                            @endforeach
                        @endif
                      </label>
                </td>
            </tr>

            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Nivel de muestreo <br>aplicado
                </th>
                <td>
                    <div>
                    <select class="form-control @error('nivelesestandars') is-invalid @enderror" wire:model="nivelesestandars" id="nivelesestandars" style="width: 190px">
                    <option selected>Seleccionar un opcion</option>
                    @foreach ($Niveles as $Nivele)
                        <option value="{{$Nivele->id}}">{{$Nivele->name}}</option>
                    @endforeach      
                    </select>
                   </div>    
                </td>
                <th class="text-center" style="font-size:12px;">
                    Ean 13
                </th>
                <td>
                    <label class="form-label text-center" style="width: 200px">
                        @if (!is_null($sku))
                            @foreach ( $datas as $data )
                                {{$data->ean13}}
                            @endforeach
                        @endif
                      </label> 
                </td>
            </tr>
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Nivel de muestreo <br>aplicado
                </th>
                <td>
                    <div>
                    <select class="form-control @error('letratamano') is-invalid @enderror" wire:model="letratamano" id="letratamano" style="width: 190px">
                        <option selected>Seleccionar un opcion</option>
                         @if (!is_null($Letras))  
                        @foreach ($Letras as $Letra)
                            <option value="{{$Letra->id}}">{{$Letra->nivel}}</option>
                        @endforeach 
                         @endif
                        </select>
                    </div> 
                </td>
                <th class="text-center" style="font-size:12px;">
                    Ean 14
                </th>
                <td>
                    <label class="form-label text-center" style="width: 200px">
                        @if (!is_null($sku))
                            @foreach ( $datas as $data )
                                {{$data->ean14}}
                            @endforeach
                        @endif
                      </label>
                </td>
            </tr>
            <tr>
                <th class="text-center" style="font-size:12px;">
                    Tamaño de la<br> muestra
                </th>
                <td>
                    <div>
                     <label class="form-label text-center  @error('tamaño_muestreo') is-invalid @enderror" wire:model="tamaño_muestreo" style="width: 150px">
                         @if (!is_null($Muestras))
                         @forelse ($Muestras as $Muestra )
                         {{$Muestra->muestra}}
                         @empty
                         <p>No hay datos</p> 
                         @endforelse
                      @endif 
                     </label>
                        </div> 
                </td>
                <th class="text-center" style="font-size:12px;">
                    Marca
                 </th>
                 <td>
                    <label class="form-label text-center" style="width: 180px">
                        @if (!is_null($sku))
                        @foreach ( $datas as $data )
                            {{$data->marca}}
                        @endforeach
                    @endif
                    </label>
                </td>
            </tr>
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Registro <br> sanitario correcto
                </th>
                <td>
                    <div>
                        <select class="form-control"  wire:model.defer="registro_sanitario" id="registro_sanitario" style="width: 190px">
                            <option value="">Seleccionar una opcion</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>  
                        </select>
                           </div> 
                </td>
                <th class="text-center" style="font-size:12px;">
                    Registro Sanitario
                 </th>
                 <td>
                    <label class="form-label text-center" style="width: 180px">
                        @if (!is_null($sku))
                        @foreach ( $datas as $data )
                            {{$data->registro_sanitario}}
                        @endforeach
                    @endif
                    </label>
                </td>
            </tr>
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Pvp correcto
                </th>
                <td>
                    <select class="form-control" id="pvp" wire:model="pvp" style="width: 190px">
                        <option value="">Seleccionar una opcion</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        <option value="No Aplica">No Aplica</option>  
                    </select>
                </td>
                <th class="text-center" style="font-size:12px;">
                    Pvp
                </th>
                <td>
                    <label class="form-label text-center" style="width: 200px">
                        @if (!is_null($sku))
                            @foreach ( $datas as $data )
                                {{$data->pvp}}
                            @endforeach
                        @endif
                      </label>
                </td>
            </tr>
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Etiqueta diferente <br>al producto
                </th>
                <td>
                    <select name="" class="form-control @error('etiqueta') is-invalid @enderror" id="etiqueta" wire:model="etiqueta" style="width: 190px">
                        <option value="">Seleccionar una opcion</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>  
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Lote, fecha de elaboración y/o<br> expiración ilegible o borrable
                </th>
                <td>
                    <select name="" class="form-control @error('lote') is-invalid @enderror" id="lote" wire:model="lote" style="width: 190px">
                       <option value="">Seleccionar una opcion</option>
                       <option value="Si">Si</option>  
                       <option value="No">No</option>  
                   </select>
               </td>
            </tr> 
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Fecha de Elaboración
                </th>
                <td>
                    <input type="date" class="form-control  @error('fecha_elaboracion') is-invalid @enderror" id="fecha_elaboracion" wire:model="fecha_elaboracion" style="width: 150px">
                </td>
                <th class="text-center" style="font-size:12px;">
                    Vida Util
                </th>
                <td>
                    <label class="form-label text-center" style="width: 180px">
                        @if (!is_null($sku))
                        @foreach ( $datas as $data )
                            {{$data->vida_util}}
                        @endforeach
                    @endif
                    </label>
                </td>
            </tr>   
            <tr>
                <th class="bg-secondary text-white text-center" style="font-size:12px;">
                    Fecha de Vencimiento
                </th>
                <td>
                    <input type="date" class="form-control  @error('fecha_vencimiento') is-invalid @enderror" id="fecha_vencimiento" wire:model="fecha_vencimiento" style="width: 150px">
                </td>
                <td>
                    <div wire:ignore>
                    <input type="text" class="form-control" wire:model="vida_logistica" id="vida_logistica" disabled style="width: 130px" 
                    :value="{{$vida_logistica}}">
                     </div>
                </td>
                    <td>
                        <div class="text-center">
                            
                            @if (!is_null($Evidencias)) 
                                <button type="button" class="btn bg-orange-600 text-white"  style="font-size: 23px;" wire:click.prevent="$set('Abrir', true)"><i class="fa-solid fa-truck-fast"></i></button>
                                 @else 

                                 @endif 
                            
                            <a class="btn bg-green-600 text-white" style="font-size: 23px;" wire:click="$set('open', true)"><i class="fa-solid fa-square-plus"></i></a>
                        </div>
                    </td>
            </tr>              
        </table>
      </div>
     </div> 

      <x-jet-dialog-modal wire:model.prevent="open">
        <x-slot name='title'>
            <label class="form label">
                <span>Sku</span>
                @if (!is_null($sku))
                @foreach ( $datas as $data )
                    {{$data->sku_quala}}
                @endforeach
            @endif
            </label>
            @if (!is_null($sku))
            @switch($data->marca)
                @case('QUIPITOS')
                <a  class="btn btn-orange-500 border" href="{{asset('pdf/C284 Matriz defectos QUIPITOS.pdf')}}" target="_blank" >
                    <i class="fa-solid fa-file-pdf"></i>     
                        PDF QUIPITOS
                    </a>
                    @break
                    @case('SAVILOE')
                    <a  class="btn btn-orange-500 border" href="{{asset('pdf/C284 Matriz defectos SAVILOE.pdf')}}" target="_blank" >
                        <i class="fa-solid fa-file-pdf"></i>
                                PDF SAVILOE
                    </a>
                    @break
                    @case('NUTRIBELA')
                    <a  class="btn btn-orange-500 border" href="{{asset('pdf/C284 Matriz defectos NUTRIBELA.pdf')}}" target="_blank" >
                        <i class="fa-solid fa-file-pdf"></i>
                            PDF NUTRIBELA
                    </a>
                    @break

                    @case('Ricompleto 10')
                    <a  class="btn btn-orange-500 border" href="{{asset('pdf/C284 Matriz defectos RICOMPLETO.pdf')}}" target="_blank" >
                        <i class="fa-solid fa-file-pdf"></i>
                            PDF RICOMPLETO
                    </a>
                    @break
                    @case('AMPER')
                    <a  class="btn btn-orange-500 border" href="{{asset('pdf/C284 Matriz defectos AMPER.pdf')}}" target="_blank" >
                        <i class="fa-solid fa-file-pdf"></i>
                            PDF AMPER
                    </a>
                    @break
                     
                @default
                <a  class="btn btn-orange-500 border" href="{{asset('pdf/C284 Matriz defectos UNILEVER.pdf')}}" target="_blank" >
                    <i class="fa-solid fa-file-pdf"></i>
                        PDF UNILEVER
                </a>
            @endswitch
            @endif
        </x-slot>
        <x-slot name='content'>
            <div class="mt-2 mb-2">
            <select class="form-control @error('defectoProducto') is-invalid @enderror" id="defectoProducto" wire:model='defectoProducto'>
              <option value="">Seleccionar un opción</option>
                 @if (!is_null($sku))
                 @switch($data->marca)
                     @case('QUIPITOS')
                     @foreach ($Quipitos_defectos as $Quipitos_defecto)
                     <option value="{{$Quipitos_defecto->id}}">{{$Quipitos_defecto->name}} - {{$Quipitos_defecto->marca}}</option>
                      @endforeach 
                         @break
                         @case('SAVILOE')
                         @foreach ($Matrices_defectos as $Matrices_defecto)
                         <option value="{{$Matrices_defecto->id}}">{{$Matrices_defecto->name}} - {{$Matrices_defecto->marca}}</option>
                        @endforeach 
                         @break
                         @case('NUTRIBELA')
                         @foreach ($Nutribela_defectos as $Nutribela_defecto)
                         <option value="{{$Nutribela_defecto->id}}">{{$Nutribela_defecto->name}} - {{$Nutribela_defecto->marca}}</option>
                          @endforeach  
                         @break
                         @case('Ricompleto 10')
                         @foreach ($Ricompleto_defectos as $Ricompleto_defecto)
                         <option value="{{$Ricompleto_defecto->id}}">{{$Ricompleto_defecto->name}} - {{$Ricompleto_defecto->marca}}</option>
                          @endforeach 
                         @break
                         @case('AMPER')
                         @foreach ($Amper_defectos as $Amper_defecto)
                         <option value="{{$Amper_defecto->id}}">{{$Amper_defecto->name}} - {{$Amper_defecto->marca}}</option>
                          @endforeach   
                         @break
                 
                     @default
                     @foreach ($Unilever_defectos as $Unilever_defecto)
                     <option value="{{$Unilever_defecto->id}}">{{$Unilever_defecto->name}} - {{$Unilever_defecto->marca}}</option>
                      @endforeach  
                 @endswitch
              
              @endif 
            </select>
          </div> 
          <div class=" mt-2 mb-2">
              <select class="form-control @error('matriz_defecto') is-invalid @enderror" id="matrizdefecto" wire:model='matrizdefecto'>
                <option value="">Seleccionar un opción</option>
                @if (!is_null($Defectos))
                    @foreach ($Defectos as $Defecto)
                        <option value="{{$Defecto->id}}">{{$Defecto->defectos}}</option>
                    @endforeach
                @endif
              </select>
          </div>

          <div class="row">
          <div class="col-sm-4 col-md-6 mt-2 mb-2 text-center">
           <label class="form-label" id="descripcion">
            @if (!is_null($descrip))
                @foreach ($descrip as $descri)
                    {{$descri->descripcion}}
                @endforeach
            @endif
           </label>
          </div>
            <div class="col-sm-4 col-md-6 mt-2 mb-2 text-center">
            <label class="form-label" id="clasificacion">
                @if (!is_null($descrip))
                @foreach ($descrip as $descri)
                    {{$descri->clasificacion}}
                @endforeach
            @endif
            </label>
            </div>
        {{-- </div>

          <div class="row"> --}}
           <div class="col-sm-4 col-md-4 mt-2 text-center">
                <label class="form-label" style="width: 90px" for="acrec">Aql</label>
            <select class="form-control" wire:model="acrec" id="acrec">
              <option value=""></option>
              @if (!is_null($Aqls))
                  @foreach ($Aqls as $Aql)
                  <option value="{{$Aql->id}}">{{$Aql->Aql}}</option>
                  @endforeach 
                  @endif
            </select>
           </div>
            <div class="col-sm-4 col-md-4 mt-2 text-center">
              <div class="mb-3">
                <label class="form-label" id="aceptacion" style="width: 90px">Aceptación</label>
                <label class="form-label" id="aceptaci" style="width: 90px">
                    @if (!is_null($Aceptaciones))
                    @foreach ($Aceptaciones as $Aceptacione )
                    {{$Aceptacione->Ac}}  
                    @endforeach
                    @endif
                </label>
            </div> 
            </div>
            <div class="col-sm-4 col-md-4 mt-2 text-center">
                <div class="mb-3">
                  <label class="form-label" id="rechazo" style="width: 90px">Rechazo</label>
                  <label class="form-label" id="recha" style="width: 90px">
                    @if (!is_null($Aceptaciones))
                    @foreach ($Aceptaciones as $Aceptacione )
                    {{$Aceptacione->rec}}  
                    @endforeach
                    @endif
                </label>
              </div> 
              </div>
            
              
            <div class="col-sm-4 col-md-4 mt-2 mb-2">
             <input type="number" class="form-control" style="width: 100px" placeholder="Cantidad" wire:model.defer="caja_un" id="caja_un">
            </div>
            
            <div class="col-sm-4 col-md-6 mb-2 mt-2">
                <select class="form-control" wire:model.defer="cantidad_caja" id="cantidad_caja">
                    <option value="">Selecciona una opción</option>
                    <option value="Cajas">Cajas</option>
                    <option value="Unidades">Unidades</option>
                    <option value="Display">Display</option>
                    <option value="No aplica">No aplica</option>
                </select>
            </div>
            </div>

            <div class="mb-2">
                <select class="form-control @error('estatus') is-invalid @enderror" id="estatus" wire:model.defer="estatus">
                  <option value="">Seleccionar un opción</option>
                  <option value="Aprobado">Aprobado</option>
                  <option value="Cuarentena">Cuarentena</option>
                  <option value="Rechazado">Rechazado</option>
                </select>
              </div>

            <div class=" mt-2 mb-2">
              <textarea class="form-control @error('obsrva') is-invalid @enderror" wire:model.defer="obsrva" cols="" rows=""></textarea>
            </div>
            
            <div class="mt-2 mb-2">
            <div class="col-md-12 mt-2 mb-2">
                <div wire:ignore>
                    <form class="dropzone" method="GET">
                    </form>
                </div>
            </div>
            </div>
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click.prevent="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click.prevent="validarCampos()">
                Guardar
            </x-jet-danger-button>
        </x-slot>
      </x-jet-dialog-modal>
       
           {{-- @php
              echo (strtotime($this->fecha_elaboracion)/(60*60*24)) - (strtotime($this->fecha_vencimiento)/(60*60*24));
          @endphp --}}

      <div class="border table-responsive col-sm-10 col-md-12 justify-content-center mb-3 mt-5" >
        <table class="table-striped table-bordered border">
            <thead>
                <tr>
                  <th class="text-center" style="font-size:13px;">
                    sku
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Cliente
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Cantidad
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Nivel de muestreo
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Letra de tamaño muestra
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Tamaño de muestra
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Vida Util
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Pvp
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Etiqueta diferente
                  </th>
                  <th class="text-center" style="font-size:13px;">
                    Estatus del Producto
                  </th>
                </tr>
            </thead>
            <tbody>

                @if (!is_null($Muestreos))
                    @switch($Muestreos->bodega)
                     @case('BODEGA GYE')
                @foreach ($Evidencia_muestreos as $Evidencia_muestreo)
                <tr>
                  <td>
                     {{$Evidencia_muestreo->Data_logistica->sku_quala}}
                  </td>
                  <td>
                    {{$Evidencia_muestreo->Data_logistica->cliente}}
                  </td>
                  <td>
                    {{$Evidencia_muestreo->cantidad}}
                  </td>
                  <td>
                    {{$Evidencia_muestreo->Tamaño_muestra->Niveles_estandar->name}}
                  </td>
                  <td class="text-center">
                    {{$Evidencia_muestreo->Tamaño_muestra->nivel}}
                  </td>
                  <td class="text-center">
                    {{$Evidencia_muestreo->Tamaño_muestra->muestra}}
                  </td>
                  <td>
                    {{$Evidencia_muestreo->vida_util}}
                  </td>
                  <td>
                    {{$Evidencia_muestreo->pvp}}
                  </td>
                  <td>
                    {{$Evidencia_muestreo->etiqueta_producto}}
                  </td>
                  <td>
                    @switch($Evidencia_muestreo->estatu_producto)
                        @case('Aprobado')
                            <label class="bg-green-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Aprobado</label>
                            @break
                        @case('Rechazado')
                            <label class="bg-orange-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Rechazado</label>
                        @break
                        @case('Cuarentena')
                        <label class="bg-lead-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Cuarentena</label>
                        @break
                        @default
                            
                    @endswitch
                  </td>
                </tr>
                @endforeach
                @break
                @case('BODEGA UIO')
                @foreach ($Evidencia_muestreos as $Evidencia_muestreo)
            <tr>
              <td>
                 {{$Evidencia_muestreo->Data_logistica->sku_quala}}
              </td>
              <td>
                {{$Evidencia_muestreo->Data_logistica->cliente}}
              </td>
              <td>
                {{$Evidencia_muestreo->cantidad}}
              </td>
              <td>
                {{$Evidencia_muestreo->Tamaño_muestra->Niveles_estandar->name}}
              </td>
              <td class="text-center">
                {{$Evidencia_muestreo->Tamaño_muestra->nivel}}
              </td>
              <td class="text-center">
                {{$Evidencia_muestreo->Tamaño_muestra->muestra}}
              </td>
              <td>
                {{$Evidencia_muestreo->vida_util}}
              </td>
              <td>
                {{$Evidencia_muestreo->pvp}}
              </td>
              <td>
                {{$Evidencia_muestreo->etiqueta_producto}}
              </td>
              <td>
                @switch($Evidencia_muestreo->estatu_producto)
                    @case('Aprobado')
                        <label class="bg-green-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Aprobado</label>
                        @break
                    @case('Rechazado')
                        <label class="bg-orange-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Rechazado</label>
                    @break
                    @case('Cuarentena')
                    <label class="bg-lead-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Cuarentena</label>
                    @break
                    @default
                        
                @endswitch
              </td>
            </tr>
            @endforeach
                @break
        
            @default
                
        @endswitch
        @endif
            </tbody>
        </table>
      </div>


      <x-jet-dialog-modal wire:model.prevent="Abrir">
        <x-slot name='title'>
            <label class="form label">
                <span>Reporte de defectos</span>
            </label>
        </x-slot>
        <x-slot name='content'>
            <div class="mt-2 mb-2">
            <select class="form-control Select2" id="skuchecklits" wire:model="skuchecklits">
              <option value="">Seleccionar un opción</option>
              @if (!is_null($dato_transporte))
                  @foreach ($dato_transporte as $dato_transport)
                  <option value="{{$dato_transport->Data_logistica->id}}">{{$dato_transport->Data_logistica->sku_quala}}</option>
                  @endforeach
                @endif
            </select>
          </div>
          
          <div class="row">
            <div class="col-sm-4 col-md-6 mt-2 mb-2 text-center">
             <label class="form-label" id="descripcion">
              @if (!is_null($sku_defectos))
                  @foreach ($sku_defectos as $sku_defecto)
                      {{$sku_defecto->descripcion}}
                  @endforeach
              @endif
             </label>
            </div>
              <div class="col-sm-4 col-md-6 mt-2 mb-2 text-center">
              <label class="form-label" id="clasificacion">
                  @if (!is_null($sku_defectos))
                  @foreach ($sku_defectos as $sku_defecto)
                      {{$sku_defecto->marca}}
                  @endforeach
              @endif
              </label>
              </div>
          </div>

          <div class=" mt-2 mb-2">
              <input type="text" class="form-control @error('estado') is-invalid @enderror" id="defecto" wire:model.defer="estado" placeholder="Defecto del producto">
          </div>
              
            <div class="col-sm-4 col-md-4 mt-2 mb-2">
             <input type="number" class="form-control @error('cantidades') is-invalid @enderror"  placeholder="Cantidad" wire:model.defer="cantidades">
            </div>
            
            <div class="col-sm-4 col-md-4 mb-2 mt-2">
                <select class="form-control @error('caja_uni') is-invalid @enderror" wire:model.defer="caja_uni" id="cantidad_caja">
                    <option value="">Selecciona una opción</option>
                    <option value="Cajas">Cajas</option>
                    <option value="Unidades">Unidades</option>
                    <option value="Display">Display</option>
                    <option value="No Aplica">No Aplica</option>
                </select>
            </div>
            {{-- <div class="col-sm-4 col-md-4 mt-2 mb-2">
                <input type="text" class="form-control"  placeholder="Lotes" id="lotes" wire:model.defer="lotes">
            </div> --}}


            <div class=" mt-2 mb-2">
              <textarea class="form-control @error('observacion') is-invalid @enderror" wire:model.defer="observacion" cols="" rows=""></textarea>
            </div>
            
            <div class="mt-2 mb-2">
             <input type="file" wire:model="imagen_defectos" class="form-control" accept="image/*" multiple>
             @if ($imagen_defectos)
             Preview Imagen:
             @foreach ($imagen_defectos as $imagen )
             <img src="{{ $imagen->temporaryUrl() }}" width="80px" height="80px">    
             @endforeach
            @endif
            </div>
        </x-slot>
        <x-slot name='footer'>
            <x-jet-secondary-button wire:click.prevent="$set('Abrir', false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click.prevent="Defectos()" >
                Guardar
            </x-jet-danger-button>
        </x-slot>
      </x-jet-dialog-modal>

      
      @if (!is_null($Evidencias))
      <div class="row">
        <div class="col-md-12 mt-3 text-center">
        <button type="button" class="btn bg-green-600 text-white" wire:click.prevent="EnviosCorreo()" wire:loading.attr="disabled" wire:target='EnviosCorreo' class="disabled:opacity-60">ENVIAR</button>
      </div>
     </div>
       @else
       
      @endif
      
      </div>
    </div>
  </div>
</div> 

<!--Imgen de la tabla -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tabla Militar Estandar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="card bg-dark d-block">
                <img class="card-img" src="{{asset('img/tabla militar estandar.png')}}" alt="Militar-estandar">
            </div>
        </div>
        <div class="modal-footer">
            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
    </div>
</div>
</div>
 
@push('scripts') 
<script>
document.addEventListener('livewire:load', function() {
    $('.Selector').on('change', function(e){
        @this.set('sku', e.target.value);
    });
    $(".Selector").select2();
   });
 </script>
<script>
document.addEventListener('livewire:load', function() {
    var arrayFiles = [];
    let myDropzone = new Dropzone(".dropzone", {
        url: "/Muestreos cliente",
        acceptedFiles: "image/*",
        method: "GET",
        paramName: "imagen_muestreo",
        maxFilesize: 5,
        addRemoveLinks: true,
        dictRemoveFile: "Eliminar Imagen",
        dictInvalidFileType: "No se puede cargar este tipo de archivo",
        init: function() {

            this.on("addedfile", function(file) {

                arrayFiles.push(file);
                
                @this.uploadMultiple('imagen_muestreo', arrayFiles)

            })

            this.on("removedfile", function(file) {

                var index = arrayFiles.indexOf(file);

                arrayFiles.splice(index, 1);

                @this.imagen_muestreo = arrayFiles;
            })

        }
    })
  
});
  
</script>
@endpush 


