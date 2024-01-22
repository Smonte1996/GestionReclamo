<div>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Check list de Pasillo</h3>
                </div>

                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <div class="input-group">
                            @if (!is_null($Infor_checklist))
                            <button class="btn btn-orange-500 text-white rounded" wire:click.prevent="$set('open', true)">
                                Editar Pasillos
                              </button>
                            @else

                            @endif
                                <button class="btn btn-green-500 text-white rounded" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Tabla de valorización
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="page-title">
                            <div class="title_left">
                                <h2 class="text-orange-500">Formulario Check list de pasillo</h2>
                            </div>
                                <div class="title_right">
                                    <div class="form-group pull-right top_search">
                                        <div class="input-group" >
                                            @if (!is_null($Infor_checklist))
    
                                     @else
                                     <select class="form-select rounded" wire:model.enter="Infor_checklist" wire:ignore>
                                     <option value="">Seleccionar una opcción</option>
                                     @foreach ($forenid as $foreid )
                                         <option value="{{ $foreid->id }}">{{ $foreid->Codigo }}</option>
                                     @endforeach
                                     </select>
                                   @endif
                                 </div>
                                </div>
                               </div> 
                              </div>

                        <div class="x_content">
                            <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                    <label for="fecha" class="form-label fs-6 text-lead-500">Fecha:</label>
                                    <input type="date" class="form-control rounded @error('fecha') is-invalid @enderror" wire:model.defer="fecha" name="fecha" id="fecha">
                                        @error('fecha')
                                            <small id="fechahelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-3">
                                    <label for="evaluador" class="form-label fs-6 text-lead-500">Evaluador:</label>
                                    <select class="form-control rounded @error('evaluador') is-invalid @enderror" wire:model.defer="evaluador" name="evaluador" id="evaluador">
                                       <option value="">Seleccionar una opción </option>
                                       <option value="Walter Fuentes">Walter Fuentes</option>
                                       <option value="Kevin Siñalin">Kevin Siñalin</option>
                                       <option value="Evelyn Ganan">Evelyn Ganan</option>
                                    </select>
                                        @error('evaluador')
                                            <small id="evaluadorhelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label fs-6 text-lead-500">Almacén:</label>
                                <select class="form-control rounded @error('almacen') is-invalid @enderror" wire:model.defer="almacen" name="almacen" id="almacen">
                                   <option value="">Seleccionar una opción </option>
                                   <option value="Bodega Gye">Bodega Gye</option>
                                   <option value="Bodega Uio">Bodega Uio</option>
                                </select>
                                    @error('almacen')
                                        <small id="almacenhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                              @if (!is_null($Infor_checklist))
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="mb-1">
                            <select class="form-control rounded @error('secofrio') is-invalid @enderror" wire:model='secofrio' name="secofrio" id="secofrio">
                               <option value="">Seleccionar una opción </option>
                               @foreach ($seco_frios as $seco_frio)
                                   <option value="{{$seco_frio->id}}">{{$seco_frio->name}}</option>
                               @endforeach
                            </select>
                                @error('secofrio')
                                    <small id="secofriohelpId"
                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-4 mt-3">
                                <div class="mb-1">

                            <select class="form-control rounded @error('pasillo') is-invalid @enderror" wire:model.defer="pasillo" name="pasillo" id="pasillo">
                               <option value="">Seleccionar una opción </option>
                                 @if (!is_null($Pasillos))
                                   @foreach ($Pasillos as $Pasillo)
                                       <option value="{{$Pasillo->id}}">{{$Pasillo->name}}</option>
                                   @endforeach
                                   @endif
                            </select>
                                @error('pasillo')
                                    <small id="pasillohelpId"
                                        class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                @enderror
                            </div>
                            </div>
                               @else
                            <div class="col-sm-12 col-md-4 mt-3 text-center">
                                <div class="mb-1">
                                <button class="btn-sm btn-primary rounded" wire:click.prevent="Checklist">Checklist</button>
                            </div>
                            </div>
                              @endif

                            </div>

                            <div class="clearfix"></div>


                            <div class="row">
                              @if (!is_null($secofrio))
                                @switch($secofrio)
                                @case(1)
                                <div class="mt-3 d-flex justify-content-end">
                                    <button class="btn-sm btn-green-500 text-center text-white rounded" wire:click.prevent="selectAll">Cumple todo</button>
                                  </div>
                            <div class="table-responsive col-sm-12 col-md-12 d-flex">
                            <table class="border border-dark col-sm-12 col-md-12" width="100%">
                            <tr align="center">
                                <td colspan="3" class="border border-dark bg-green-500 text-white">
                                    Bodega seca (Aplica para Quito y Guayaquil).
                                </td>
                            </tr>
                            <tr align="left">
                            <td class="border border-start-0" style="width: 350px;">
                                1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
                            </td>
                            <td style="width: 150px;">

                                <select class="form-control rounded @error('selectedOptions') is-invalid @enderror" wire:model.defer="selectedOptions" name="selectedOptions" id="selectedOptions" required>
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso1') is-invalid @enderror" wire:model.defer="bso1" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr align="left">
                                <td class="border border-start-0" style="width: 350px;">
                                    2. Los pallets están limpios, sin manchas, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
                               </td>
                               <td>
                                <select class="form-control rounded @error('selectedOptions1') is-invalid @enderror" wire:model.defer="selectedOptions1" name="selectedOptions1" id="selectedOptions1" required>
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso2') is-invalid @enderror" wire:model.defer="bso2" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr align="left">
                            <td class="border border-start-0">
                                3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
                            </td>
                            <td>
                                <select class="form-control rounded @error('selectedOptions3') is-invalid @enderror" wire:model.defer="selectedOptions3" name="selectedOptions3" id="selectedOptions3" required>
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso3') is-invalid @enderror" wire:model.defer="bso3" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr>
                            <td class="border border-start-0">
                                4. Las cajas se apilan correctamente, no hay cajas desordenadas, abierta o mercadería con riesgo de caída.
                            </td>
                            <td>
                                <select class="form-control rounded @error('selectedOptions4') is-invalid @enderror" wire:model.defer="selectedOptions4" name="selectedOptions4" id="selectedOptions4" required>
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso4') is-invalid @enderror" wire:model.defer="bso4" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                             </tr>

                             <tr>
                            <td class="border border-start-0">
                                5. No existen cajas abiertas en niveles del 2 al 7 que favorezcan la contaminación cruzada del producto por acumulación de polvo.
                            </td>
                            <td>
                                <select class="form-control rounded @error('selectedOptions5') is-invalid @enderror" wire:model.defer="selectedOptions5" name="selectedOptions5" id="selectedOptions5" required>
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso5') is-invalid @enderror" wire:model.defer="bso5" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr>
                                <td class="border border-start-0">
                                    6. No existe doble fila de pallets que obstaculicen el tránsito en el pasillo; los extintores, cajetines y puertas de emergencia están despejadas.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('selectedOptions6') is-invalid @enderror" wire:model.defer="selectedOptions6" name="selectedOptions6" id="selectedOptions6" required>
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bso6') is-invalid @enderror" wire:model.defer="bso6" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                             <tr>
                            <td class="border-end">
                                7. No existen objetos en desuso como cartones, madera, retazos de madera o stretch film adheridos al pallets.
                            </td>
                            <td>
                                <select class="form-control rounded @error('selectedOptions7') is-invalid @enderror" wire:model.defer="selectedOptions7" name="selectedOptions7" id="selectedOptions7" required>
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso7') is-invalid @enderror" wire:model.defer="bso7" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr>
                            <td class="border border-start-0">
                                8. Las ubicaciones están identificadas, no existen rótulos que no correspondan al producto almacenado y se respecta los rótulos de identificación de áreas, clientes y/o productos.
                            </td>
                            <td>
                                <select class="form-control rounded @error('selectedOptions8') is-invalid @enderror" wire:model.defer="selectedOptions8" name="selectedOptions8" id="selectedOptions8">
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso8') is-invalid @enderror" wire:model.defer="bso8" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr>
                            <td class="border border-start-0">
                                9. No existe stretch film colgando.
                            </td>
                            <td>
                                <select class="form-control rounded @error('selectedOptions9') is-invalid @enderror" wire:model.defer="selectedOptions9" name="selectedOptions9" id="selectedOptions9">
                                    <option value="">Seleccionar</option>
                                    <option value="2">Cumple</option>
                                    <option value="1">Cumple parcialmente</option>
                                    <option value="0">No cumple</option>
                                 </select>
                            </td>

                            <td>
                                <textarea name="" id="" class="form-control rounded @error('bso9') is-invalid @enderror" wire:model.defer="bso9" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                            </td>
                            </tr>

                            <tr>
                                <td class="border-end">
                                    10. El pallets se encuentra ubicado correctamente en el rack (cuadrado en la viga o en el piso).
                                </td>
                                <td>
                                    <select class="form-control rounded @error('selectedOptions10') is-invalid @enderror" wire:model.defer="selectedOptions10" name="selectedOptions10" id="selectedOptions10" required>
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bso10') is-invalid @enderror" wire:model.defer="bso10" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>
                            </table>
                           </div>
                           <div class="mt-4">
                            <button class="btn-sm btn btn-outline-success" wire:click.prevent="Checklist_seco">Guardar</button>
                           </div>
                                    @break

                                    @case(2)
                                    <div class="clearfix"></div>

                                    <div class="mt-3 d-flex justify-content-end">
                                     <button class="btn-sm btn-green-500 text-center text-white" wire:click.prevent='SelectFria'>Cumple todo</button>
                                   </div>
                                    <div class="table-responsive col-sm-12 col-md-12 d-flex">
                                     <table class="border border-dark col-sm-12 col-md-12 " width="100%">
                                     <tr align="center">
                                         <td colspan="3" class="border border-dark bg-green-500 text-white">
                                             Bodega fría (Aplica para Quito y Guayaquil).
                                         </td>
                                     </tr>
                                     <tr align="left">
                                     <td class="border border-start-0" style="width: 350px;">
                                         1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
                                     </td>
                                     <td style="width: 145px;">
                                        <select class="form-control rounded @error('bf1') is-invalid @enderror" wire:model.defer="bf1" name="bf1" id="bf1">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo1') is-invalid @enderror" wire:model.defer="bfo1" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr align="left">
                                         <td class="border border-start-0" style="width: 350px;">
                                             2. Los pallets están limpios, sin manchas, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
                                        </td>
                                        <td>
                                            <select class="form-control rounded @error('bf2') is-invalid @enderror" wire:model.defer="bf2" name="bf2" id="bf2">
                                                <option value="">Seleccionar</option>
                                                <option value="2">Cumple</option>
                                                <option value="1">Cumple parcialmente</option>
                                                <option value="0">No cumple</option>
                                             </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo2') is-invalid @enderror" wire:model.defer="bfo2" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr align="left">
                                     <td class="border border-start-0">
                                         3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('bf3') is-invalid @enderror" wire:model.defer="bf3" name="bf3" id="bf3">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo3') is-invalid @enderror" wire:model.defer="bfo3" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                     <td class="border border-start-0">
                                         4. Las cajas se apilan correctamente, no hay cajas desordenadas o mercadería con riesgo de caída.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('bf4') is-invalid @enderror" wire:model.defer="bf4" name="bf4" id="bf4">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo4') is-invalid @enderror" wire:model.defer="bfo4" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                      </tr>

                                      <tr>
                                     <td class="border border-start-0">
                                         5. No existen cajas abiertas en niveles del 2 al 7 que favorezcan la contaminación cruzada del producto por acumulación de polvo.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('bf5') is-invalid @enderror" wire:model.defer="bf5" name="bf5" id="bf5">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo5') is-invalid @enderror" wire:model.defer="bfo5" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                         <td class="border border-start-0">
                                             6. No existe doble fila de pallets que obstaculicen el tránsito en el pasillo; los extintores, cajetines y puertas de emergencia están despejadas.
                                         </td>
                                         <td>
                                             <select class="form-control rounded @error('bf6') is-invalid @enderror" wire:model.defer="bf6" name="bf6" id="bf6">
                                                <option value="">Seleccionar</option>
                                                <option value="2">Cumple</option>
                                                <option value="1">Cumple parcialmente</option>
                                                <option value="0">No cumple</option>
                                             </select>
                                         </td>

                                         <td>
                                             <textarea name="" id="" class="form-control rounded @error('bfo6') is-invalid @enderror" wire:model.defer="bfo6" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                         </td>
                                         </tr>

                                      <tr>
                                     <td class="border-end">
                                         7. No existen objetos en desuso como cartones, madera, retazos de madera o stretch film adheridos al pallets.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('bf7') is-invalid @enderror" wire:model.defer="bf7" name="bf7" id="bf7">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo7') is-invalid @enderror" wire:model.defer="bfo7" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                      <tr>
                                     <td class="border border-start-0">
                                         8. Las ubicaciones están identificadas, no existen rótulos que no correspondan al producto almacenado y se respecta los rótulos de identificación de áreas, clientes y/o productos.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('bf8') is-invalid @enderror" wire:model.defer="bf8" name="bf8" id="bf8">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo8') is-invalid @enderror" wire:model.defer="bfo8" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                     <td class="border border-start-0">
                                         9. No existe stretch film colgando.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('bf9') is-invalid @enderror" wire:model.defer="bf9" name="bf9" id="bf9">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bfo9') is-invalid @enderror" wire:model.defer="bfo9" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                        <td class="border-end">
                                            10. El pallets se encuentra ubicado correctamente en el rack (cuadrado en la viga o en el piso).
                                        </td>
                                        <td>
                                           <select class="form-control rounded @error('bf10') is-invalid @enderror" wire:model.defer="bf10" name="bf10" id="bf10">
                                               <option value="">Seleccionar</option>
                                               <option value="2">Cumple</option>
                                               <option value="1">Cumple parcialmente</option>
                                               <option value="0">No cumple</option>
                                            </select>
                                        </td>

                                        <td>
                                            <textarea name="" id="bfo10" class="form-control rounded @error('bfo10') is-invalid @enderror" wire:model.defer="bfo10" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                        </td>
                                        </tr>


                                     </table>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn-sm btn btn-outline-success" wire:click.prevent="Checklist_frio">Guardar</button>
                                    </div>
                                    @break

                                    @case(3)
                                    <div class="clearfix"></div>
                                    <div class="mt-3 d-flex justify-content-end">
                                     <button class="btn-sm btn-green-500 text-center text-white" wire:click.prevent='selectReefer'>Cumple todo</button>
                                   </div>
                                    <div class="table-responsive col-sm-12 col-md-12 d-flex">
                                     <table class="border border-dark col-sm-12 col-md-12" width="100%">
                                     <tr align="center">
                                         <td colspan="3" class="border border-dark bg-green-500 text-white">
                                             Reefer (Aplica para Quito y Guayaquil).
                                         </td>
                                     </tr>
                                     <tr align="left">
                                     <td class="border border-start-0" style="width: 350px;">
                                         1. Cortina de flecos limpia, sin etiquetas adheridas o suciedad acumulada.
                                     </td>
                                     <td style="width: 145px;">
                                        <select class="form-control rounded @error('br1') is-invalid @enderror" wire:model.defer="br1" name="br1" id="br1">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bro1') is-invalid @enderror" wire:model.defer='bro1' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr align="left">
                                         <td class="border border-start-0" style="width: 350px;">
                                             2. Piso limpio, sin suciedad acumulada o producto derramado.
                                        </td>
                                        <td>
                                            <select class="form-control rounded @error('br2') is-invalid @enderror" wire:model.defer="br2" name="br2" id="br2">
                                                <option value="">Seleccionar</option>
                                                <option value="2">Cumple</option>
                                                <option value="1">Cumple parcialmente</option>
                                                <option value="0">No cumple</option>
                                             </select>
                                     </td>

                                     <td>
                                         <textarea name="bro2" id="" class="form-control rounded @error('bro2') is-invalid @enderror" wire:model.defer='bro2' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr align="left">
                                     <td class="border border-start-0">
                                         3. Paredes y techo limpio, sin suciedad acumulada o etiquetas adheridas.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('br3') is-invalid @enderror" wire:model.defer="br3" name="br3" id="br3">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="bro3" id="" class="form-control rounded @error('bro3') is-invalid @enderror" wire:model.defer="bro3" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                     <td class="border border-start-0">
                                         4. Producto sobre percha o gaveta, no en piso y correctamente ubicado (ordenado).
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('br4') is-invalid @enderror" wire:model.defer="br4" name="br4" id="br4">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="bro4" id="" class="form-control rounded @error('bro4') is-invalid @enderror" wire:model.defer="bro4" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                      </tr>

                                      <tr>
                                     <td class="border border-start-0">
                                         5. Las puertas se mantienen cerradas para mantener la temperatura (cuando no exista actividad de recepción/despacho).
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('br5') is-invalid @enderror" wire:model.defer="br5" name="br5" id="br5">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="bro5" id="" class="form-control rounded @error('bro5') is-invalid @enderror" wire:model.defer="bro5" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                         <td class="border-end">
                                             6. No hay acumulación de materiales en desuso que impidan el transito.
                                         </td>
                                         <td>
                                            <select class="form-control rounded @error('br6') is-invalid @enderror" wire:model.defer="br6" name="br6" id="br6">
                                                <option value="">Seleccionar</option>
                                                <option value="2">Cumple</option>
                                                <option value="1">Cumple parcialmente</option>
                                                <option value="0">No cumple</option>
                                             </select>
                                         </td>

                                         <td>
                                             <textarea name="bro6" id="" class="form-control rounded @error('bro6') is-invalid @enderror" wire:model.defer="bro6" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                         </td>
                                         </tr>
                                     </table>
                                    </div>
                                    <div class="mt-4">
                                        <button class="btn-sm btn btn-outline-success" wire:click.prevent='Checklist_reefer'>Guardar</button>
                                       </div>
                                    @break

                                    @case(4)
                                    <div class="clearfix"></div>
                                    <div class="mt-3 d-flex justify-content-end">
                                     <button class="btn-sm btn-green-500 text-center text-white" wire:click.prevent='SelectAndenes'>Cumple todo</button>
                                   </div>
                                    <div class="table-responsive col-sm-12 col-md-12 d-flex">
                                     <table class="border border-dark col-sm-12 col-md-12" width="100%">
                                     <tr align="center">
                                         <td colspan="3" class="border border-dark bg-green-500 text-white">
                                            Puerta  Y Andenes (Aplica para Quito y Guayaquil).
                                         </td>
                                     </tr>
                                     <tr align="left">
                                     <td class="border border-start-0" style="width: 350px;">
                                         1. Las tulas o cajones para el reciclaje se usan correctamente (cartón, stretch film y retazos de madera separados e identificados).
                                     </td>
                                     <td style="width: 145px;">
                                        <select class="form-control rounded @error('ba1') is-invalid @enderror" wire:model.defer="ba1" name="ba1" id="ba1">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bao1') is-invalid @enderror" wire:model.defer='bao1' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr align="left">
                                         <td class="border border-start-0" style="width: 350px;">
                                             2. Las estaciones para monitoreo de roedores se encuentran despejadas (zona interna y externa de puertas).
                                        </td>
                                        <td>
                                            <select class="form-control rounded @error('br2') is-invalid @enderror" wire:model.defer="ba2" name="ba2" id="ba2">
                                                <option value="">Seleccionar</option>
                                                <option value="2">Cumple</option>
                                                <option value="1">Cumple parcialmente</option>
                                                <option value="0">No cumple</option>
                                             </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bao1') is-invalid @enderror" wire:model.defer='bao2' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr align="left">
                                     <td class="border border-start-0">
                                         3. Los utensilios de limpieza, conos de seguridad, reflectores y cizallas están ubicados en la zona asignadas correctamente ordenados.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('ba3') is-invalid @enderror" wire:model.defer="ba3" name="ba3" id="ba3">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bao3') is-invalid @enderror" wire:model.defer='bao3' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                     <td class="border border-start-0">
                                         4. Los modulares/escritorios están ordenados y limpios.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('ba4') is-invalid @enderror" wire:model.defer="ba4" name="ba4" id="ba4">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bao4') is-invalid @enderror" wire:model.defer='bao4' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                      </tr>

                                      <tr>
                                     <td class="border border-start-0">
                                         5. No existen objetos que obstaculicen el acceso a cajetines y/o extintores de la red contra incendio.
                                     </td>
                                     <td>
                                        <select class="form-control rounded @error('ba5') is-invalid @enderror" wire:model.defer="ba5" name="ba5" id="ba5">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                     </td>

                                     <td>
                                         <textarea name="" id="" class="form-control rounded @error('bao5') is-invalid @enderror" wire:model.defer='bao5' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                     </td>
                                     </tr>

                                     <tr>
                                        <td class="border border-start-0">
                                            6. Las puertas de andenes se mantienen cerradas si no hay vehículo estacionado.
                                        </td>
                                        <td>
                                           <select class="form-control rounded @error('ba6') is-invalid @enderror" wire:model.defer="ba6" name="ba5" id="ba6">
                                               <option value="">Seleccionar</option>
                                               <option value="2">Cumple</option>
                                               <option value="1">Cumple parcialmente</option>
                                               <option value="0">No cumple</option>
                                            </select>
                                        </td>

                                        <td>
                                            <textarea name="" id="bao6" class="form-control rounded @error('bao6') is-invalid @enderror" wire:model.defer='bao6' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                        </td>
                                        </tr>

                                        <tr>
                                            <td class="border-end">
                                                7. El patio de maniobras se mantiene despejado (sin acumulación de pallets, producto u objetos).
                                            </td>
                                            <td>
                                               <select class="form-control rounded @error('ba7') is-invalid @enderror" wire:model.defer="ba7" name="ba7" id="ba7">
                                                   <option value="">Seleccionar</option>
                                                   <option value="2">Cumple</option>
                                                   <option value="1">Cumple parcialmente</option>
                                                   <option value="0">No cumple</option>
                                                </select>
                                            </td>

                                            <td>
                                                <textarea name="" id="bao7" class="form-control rounded @error('bao7') is-invalid @enderror" wire:model.defer='bao7' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                            </td>
                                            </tr>
                                     </table>
                                    </div>
                                    <div class="mt-4 col-md-6">
                                        <button class="btn-sm btn btn-outline-success" wire:click.prevent="checklsit_andene()">Guardar</button>
                                    </div>
                                    @break
                                    @case(5)
                                    <div class="mt-3 d-flex justify-content-end">
                                        <button class="btn-sm btn-green-500 text-center text-white rounded" wire:click.prevent='SelectAmpliacion'>Cumple todo</button>
                                      </div>
                                <div class="table-responsive col-sm-12 col-md-12 d-flex">
                                <table class="border border-dark col-sm-12 col-md-12" width="100%">
                                <tr align="center">
                                    <td colspan="3" class="border border-dark bg-green-500 text-white">
                                        Bodega Ampleacion / Zona de supermercado (Aplica para Guayaquil).
                                    </td>
                                </tr>
                                <tr align="left">
                                <td class="border border-start-0" style="width: 350px;">
                                    1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
                                </td>
                                <td style="width: 150px;">

                                    <select class="form-control rounded @error('bam1') is-invalid @enderror" wire:model.defer="bam1" name="bam1" id="bam1">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bamo1') is-invalid @enderror" wire:model.defer="bamo1" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                                <tr align="left">
                                    <td class="border border-start-0" style="width: 350px;">
                                        2. Los pallets y/o baldas están limpias, sin manchas o polvo acumulado, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
                                   </td>
                                   <td>
                                    <select class="form-control rounded @error('bam2') is-invalid @enderror" wire:model.defer="bam2" name="bam2" id="bam2">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bamo2') is-invalid @enderror" wire:model.defer="bamo2" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                                <tr align="left">
                                <td class="border border-start-0">
                                    3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('bam3') is-invalid @enderror" wire:model.defer="bam3" name="bam3" id="bam3">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bamo3') is-invalid @enderror" wire:model.defer="bamo3" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                                <tr>
                                <td class="border border-start-0">
                                    4. El producto se acomoda correctamente sobre pallets, ordenados por artículos, no hay producto en piso o cajas desordenadas.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('bam4') is-invalid @enderror" wire:model.defer="bam4" name="bam4" id="bam4">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bamo4') is-invalid @enderror" wire:model.defer="bamo4" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                 </tr>

                                 <tr>
                                <td class="border border-start-0">
                                    5. No existe doble fila de pallets y/o roles que obstaculicen el tránsito; los extintores, cajetines y puertas de emergencia están despejadas.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('bam5') is-invalid @enderror" wire:model.defer="bam5" name="bam5" id="bam5">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bamo5') is-invalid @enderror" wire:model.defer="bamo5" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                                <tr>
                                    <td class="border border-start-0">
                                        6. Las gavetas están ordenadas, apiladas, limpias y tienen una zona de almacenamiento asignada y rotulada.
                                    </td>
                                    <td>
                                        <select class="form-control rounded @error('bam6') is-invalid @enderror" wire:model.defer="bam6" name="bam6" id="bam6">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                    </td>

                                    <td>
                                        <textarea name="" id="" class="form-control rounded @error('bamo6') is-invalid @enderror" wire:model.defer="bamo6" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                    </td>
                                    </tr>

                                 <tr>
                                <td class="border-end">
                                    7. Las jaulas están identificadas, limpias y tienen una zona de almacenamiento asignada y rotulada.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('bam7') is-invalid @enderror" wire:model.defer="bam7" name="bam7" id="bam7">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="" class="form-control rounded @error('bamo7') is-invalid @enderror" wire:model.defer="bamo7" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                             <tr>
                                <td class="border border-start-0">
                                    8. La zona de roles está ordenada e identificada, los roles están alineados, agrupados y correctamente ubicados.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('bam8') is-invalid @enderror" wire:model.defer="bam8" name="bam8" id="bam8">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="bamo8" class="form-control rounded @error('bamo8') is-invalid @enderror" wire:model.defer="bamo8" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                                <tr>
                                <td class="border-end">
                                    9. El material de reciclaje está correctamente apilado y tienen una zona de acopio asignado y rotulado.
                                </td>
                                <td>
                                    <select class="form-control rounded @error('bam9') is-invalid @enderror" wire:model.defer="bam9" name="bam9" id="bam9">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                </td>

                                <td>
                                    <textarea name="" id="bamo9" class="form-control rounded @error('bamo9') is-invalid @enderror" wire:model.defer="bamo9" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                </td>
                                </tr>

                                <tr>
                                    <td class="border border-start-0">
                                        10. Los productos frágiles (vidrio) se ubican de tal manera que no tienen un riesgo de caída.
                                    </td>
                                    <td>
                                        <select class="form-control rounded @error('bam10') is-invalid @enderror" wire:model.defer="bam10" name="bam10" id="bam10">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                    </td>

                                    <td>
                                        <textarea name="" id="bamo10" class="form-control rounded @error('bamo10') is-invalid @enderror" wire:model.defer="bamo10" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                    </td>
                                    </tr>

                                    <tr>
                                        <td class="border border-start-0">
                                            11. No existen objetos en desuso como cartones, madera, retazos de madera, stretch film o papeles en ubicaciones.
                                        </td>
                                        <td>
                                            <select class="form-control rounded @error('bam11') is-invalid @enderror" wire:model.defer="bam11" name="bam11" id="bam11">
                                                <option value="">Seleccionar</option>
                                                <option value="2">Cumple</option>
                                                <option value="1">Cumple parcialmente</option>
                                                <option value="0">No cumple</option>
                                             </select>
                                        </td>

                                        <td>
                                            <textarea name="" id="bamo11" class="form-control rounded @error('bamo11') is-invalid @enderror" wire:model.defer="bamo11" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                        </td>
                                        </tr>

                                        <tr>
                                            <td class="border border-start-0">
                                                12. Las ubicaciones están identificadas y no existen rótulos que no correspondan al producto almacenado.
                                            </td>
                                            <td>
                                                <select class="form-control rounded @error('bam12') is-invalid @enderror" wire:model.defer="bam12" name="bam12" id="bam12">
                                                    <option value="">Seleccionar</option>
                                                    <option value="2">Cumple</option>
                                                    <option value="1">Cumple parcialmente</option>
                                                    <option value="0">No cumple</option>
                                                 </select>
                                            </td>

                                            <td>
                                                <textarea name="" id="bamo12" class="form-control rounded @error('bamo12') is-invalid @enderror" wire:model.defer="bamo12" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                            </td>
                                            </tr>

                                            <tr>
                                                <td class="border-end">
                                                    13. No existe stretch film colgando.
                                                </td>
                                                <td>
                                                    <select class="form-control rounded @error('bam13') is-invalid @enderror" wire:model.defer="bam13" name="bam13" id="bam13">
                                                        <option value="">Seleccionar</option>
                                                        <option value="2">Cumple</option>
                                                        <option value="1">Cumple parcialmente</option>
                                                        <option value="0">No cumple</option>
                                                     </select>
                                                </td>

                                                <td>
                                                    <textarea name="" id="bamo13" class="form-control rounded @error('bamo13') is-invalid @enderror" wire:model.defer="bamo13" cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                                </td>
                                                </tr>
                                </table>
                               </div>
                               <div class="mt-4 text-center">
                                <button class="btn-sm btn btn-outline-success" wire:click.prevent="Checklist_Ampliacion">Guardar</button>
                               </div>
                                    @break
                                @case(6)
                                <div class="clearfix"></div>
                                <div class="mt-3 d-flex justify-content-end">
                                 <button class="btn-sm btn-green-500 text-center text-white" wire:click.prevent='seleccionContenedor'>Cumple todo</button>
                               </div>
                                <div class="table-responsive col-sm-12 col-md-12 d-flex">
                                 <table class="border border-dark col-sm-12 col-md-12" width="100%">
                                 <tr align="center">
                                     <td colspan="3" class="border border-dark bg-green-500 text-white">
                                        Zona de contenedores para averías y área de tuberías.
                                     </td>
                                 </tr>
                                 <tr align="left">
                                 <td class="border border-start-0" style="width: 350px;">
                                     1. No hay acumulación de materiales en desuso (pallets, plásticos, madera, etc.).
                                 </td>
                                 <td style="width: 145px;">
                                    <select class="form-control rounded @error('zt1') is-invalid @enderror" wire:model.defer="zt1" name="zt1" id="zt1">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                 </td>
                                 <td>
                                     <textarea name="" id="zto1" class="form-control rounded @error('zto1') is-invalid @enderror" wire:model.defer='zto1' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                 </td>
                                 </tr>

                                 <tr align="left">
                                     <td class="border border-start-0" style="width: 350px;">
                                         2. No existen pallets de producto, equipos o materiales almacenados/ubicados en área no definidas para este fin.
                                    </td>
                                    <td>
                                        <select class="form-control rounded @error('zt2') is-invalid @enderror" wire:model.defer="zt2" name="zt2" id="zt2">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                 </td>
                                 <td>
                                     <textarea name="" id="zto2" class="form-control rounded @error('zto2') is-invalid @enderror" wire:model.defer='zto2' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                 </td>
                                 </tr>

                                 <tr align="left">
                                 <td class="border-end">
                                     3. Se mantiene el orden del área.
                                 </td>
                                 <td>
                                    <select class="form-control rounded @error('zt3') is-invalid @enderror" wire:model.defer="zt3" name="zt3" id="zt3">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                 </td>
                                 <td>
                                     <textarea name="" id="zto3" class="form-control rounded @error('zto3') is-invalid @enderror" wire:model.defer='zto3' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                 </td>
                                 </tr>
                                 </table>
                                </div>
                                <div class="mt-4 text-center">
                                    <button class="btn-sm btn btn-outline-success" wire:click.prevent="ZonaContenedorTuberia">Guardar</button>
                                </div>
                                @break
                                @case(7)
                                <div class="clearfix"></div>
                                <div class="mt-3 d-flex justify-content-end">
                                 <button class="btn-sm btn-green-500 text-center text-white" wire:click.prevent='seleccionContornoCd'>Cumple todo</button>
                               </div>
                                <div class="table-responsive col-sm-12 col-md-12 d-flex">
                                 <table class="border border-dark col-sm-12 col-md-12" width="100%">
                                 <tr align="center">
                                     <td colspan="3" class="border border-dark bg-green-500 text-white">
                                        Contorno de bodega y perímetro del CD.
                                     </td>
                                 </tr>
                                 <tr align="left">
                                 <td class="border border-start-0" style="width: 350px;">
                                     1. Las salidas de emergencia se mantienen despejadas.
                                 </td>
                                 <td style="width: 145px;">
                                    <select class="form-control rounded @error('cbde1') is-invalid @enderror" wire:model.defer="cbde1" name="cbde1" id="cbde1">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                 </td>
                                 <td>
                                     <textarea name="" id="cbdeo1" class="form-control rounded @error('cbdeo1') is-invalid @enderror" wire:model.defer='cbdeo1' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                 </td>
                                 </tr>

                                 <tr align="left">
                                     <td class="border border-start-0" style="width: 350px;">
                                         2. No hay acumulación de objetos, materiales o artículos en desuso que puedan servir de refugio de animales y plagas comunes.
                                    </td>
                                    <td>
                                        <select class="form-control rounded @error('cbde2') is-invalid @enderror" wire:model.defer="cbde2" name="cbde2" id="cbde2">
                                            <option value="">Seleccionar</option>
                                            <option value="2">Cumple</option>
                                            <option value="1">Cumple parcialmente</option>
                                            <option value="0">No cumple</option>
                                         </select>
                                 </td>
                                 <td>
                                     <textarea name="" id="cbdeo2" class="form-control rounded @error('cbdeo2') is-invalid @enderror" wire:model.defer='cbdeo2' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                 </td>
                                 </tr>

                                 <tr align="left">
                                 <td class="border-end">
                                     3. Se mantiene una correcta limpieza y aseo del área.
                                 </td>
                                 <td>
                                    <select class="form-control rounded @error('cbde3') is-invalid @enderror" wire:model.defer="cbde3" name="cbde3" id="cbde3">
                                        <option value="">Seleccionar</option>
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple parcialmente</option>
                                        <option value="0">No cumple</option>
                                     </select>
                                 </td>
                                 <td>
                                     <textarea name="" id="cbdeo3" class="form-control rounded @error('cbdeo3') is-invalid @enderror" wire:model.defer='cbdeo3' cols="6" rows="1" placeholder="Ubicaciones y/o detalle de observaciones"></textarea>
                                 </td>
                                 </tr>
                                 </table>
                                </div>
                                <div class="mt-4 text-center">
                                    <button class="btn-sm btn btn-outline-success" wire:click.prevent="ContornoPerimetro">Guardar</button>
                                </div>
                                <div class="d-flex justify-content-end">
                                        <button class="btn-sn btn btn-primary" wire:click.prevent='Enviar'>
                                        Enviar
                                        </button>
                                    </div>
                                @break
                                @default

                            @endswitch
                            @endif
                            </div>
                            <x-jet-dialog-modal wire:model.prevent="open" maxWidth="xl">
                                <x-slot name='title'>
                                    <div class="col-md-12 col-sm-12 text-center">
                                        <div class="input-group ">
                                        <img src="{{asset('img/logo.png')}}" alt="logo" width="180">
                                    <label class="form-label mt-2">
                                    <span> <strong> Pasillos Guardados </strong></span>
                                    </label>
                                        </div>
                                    </div>
                                </x-slot>
                                <x-slot name='content'>
                                    <div class="col-sm-12 col-md-4">
                                    <div class="mt-2 mb-3">
                                    <label for="form-label fs-6" style="color: #7c7c7c">Zona de bodega</label>
                                    <select name="" id="" class="form-select rounded" wire:model="zonaguardada">
                                        <option value="">seleccionar</option>
                                        @foreach ($seco_frios as $seco_frio)
                                      <option value="{{$seco_frio->id}}">{{$seco_frio->name}}</option>
                                       @endforeach
                                    </select>
                                    </div>
                                    </div>



                                    <div class="table-responsible">
                                        <table class="table">
                                            <tr>
                                                <td align="center" colspan="3" class="text-center bg-lead-500 border border-dark text-white"><span> <strong> CRITERIOS DE CALIFICACIÓN </strong></span></td>
                                                <tr>
                                                    <td class="text-center border border-dark">
                                                        CUMPLE (2)
                                                    </td>
                                                    <td class="text-center border border-dark">
                                                        CUMPLE PARCIALMENTE (1)
                                                    </td>
                                                    <td class="text-center border border-dark">
                                                        NO CUMPLE (0)
                                                    </td>
                                                </tr>
                                                </tr>
                                        </table>
                                        @switch($zonaguardada)
                                            @case(1)
                                        @if (!is_null($zonaguardada))
                                        <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                            <tr class="cabecera " align="center">
                                                <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Bodega seca / Zona de almacenamiento en rack</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="border border-start-0" style="font-size:11px;">
                                                    1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
                                                </td>
                                                <td class="border border-start-0" style="font-size:11px;">
                                                    4. Las cajas se apilan correctamente, no hay cajas desordenadas, abierta o mercadería con riesgo de caída.
                                                </td>
                                                <td class="border border-end-0" style="font-size:11px;">
                                                    7. No existen objetos en desuso como cartones, madera, retazos de madera o stretch film adheridos al pallets.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="border border-start-0" style="font-size:11px;">
                                                    2. Los pallets están limpios, sin manchas, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
                                                </td>
                                                <td class="border border-start-0" style="font-size:11px;">
                                                    5. No existen cajas abiertas en niveles del 2 al 7 que favorezcan la contaminación cruzada del producto por acumulación de polvo.
                                                </td>
                                                <td class="border border-end-0" style="font-size:11px;">
                                                    8. Las ubicaciones están identificadas, no existen rótulos que no correspondan al producto almacenado y se respecta los rótulos de identificación de áreas, clientes y/o productos.
                                                </td>
                                            </tr>
                                           <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                6. No existe doble fila de pallets que obstaculicen el tránsito en el pasillo; los extintores, cajetines y puertas de emergencia están despejadas.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                9. No existe stretch film colgando.
                                            </td>
                                           </tr>
                                            <tr>
                                                <td colspan="3" class="border-0" style="font-size:11px;" align="center">10. El pallets se encuentra ubicado correctamente en el rack (cuadrado en la viga o en el piso).</td>
                                            </tr>
                                          </table>
                                    <div class="table-responsive">
                                   <table class="table table-striped">
                                    <thead style="background-color: #333; color: #fff">
                                     <tr>
                                        <th class="text-center">
                                            Pasillos
                                        </th>
                                        <th class="text-center">
                                            1
                                        </th>
                                        <th class="text-center">
                                            2
                                        </th>
                                        <th class="text-center">
                                            3
                                        </th>
                                        <th class="text-center">
                                            4
                                        </th>
                                        <th class="text-center">
                                            5
                                        </th>
                                        <th class="text-center">
                                            6
                                        </th>
                                        <th class="text-center">
                                            7
                                        </th>
                                        <th class="text-center">
                                            8
                                        </th>
                                        <th class="text-center">
                                            9
                                        </th>
                                        <th class="text-center">
                                            10
                                        </th>
                                        <th class="text-center">
                                            Observacion / ubicaciones
                                        </th>
                                        <th class="text-center">
                                            Acción
                                        </th>
                                     </tr>
                                    </thead>
                                    <tbody>
                                        @if (!is_null($zonaguardada))
                                        @foreach ($Bodegas as $Bodegaseca)
                                        <tr>
                                            <td class="text-center">
                                               {{$Bodegaseca->Pasillos->name}}
                                            </td>
                                            <td class="text-center">
                                            <input type="text" wire:model.prevent.lazyn="bsa1.{{$Bodegaseca->id}}" class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs1}}" :value="{{$Bodegaseca->bs1}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bsa2.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs2}}" :value="{{$Bodegaseca->bs2}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa3.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs3}}" value="{{$Bodegaseca->bs3}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa4.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs4}}" value="{{$Bodegaseca->bs4}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa5.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs5}}" value="{{$Bodegaseca->bs5}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa6.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs6}}" value="{{$Bodegaseca->bs6}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa7.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs7}}" value="{{$Bodegaseca->bs7}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa8.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs8}}" value="{{$Bodegaseca->bs8}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa9.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs9}}" value="{{$Bodegaseca->bs9}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bsa10.{{$Bodegaseca->id}}' class="form-control rounded text-center" placeholder="{{$Bodegaseca->bs10}}" value="{{$Bodegaseca->bs10}}" style="width: 50px">
                                            </td>
                                            <td class="text-center">
                                            @isset($Bodegaseca->bso1)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao1.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso1}}" ></textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso2)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao2.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso2}}"> </textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso3)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao3.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso3}}" > </textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso4)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao4.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso4}}"> </textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso5)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao5.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso5}}"></textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso6)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao6.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso6}}"></textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso7)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao7.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso7}}"></textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso8)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao8.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso8}}"></textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso9)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao9.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso9}}"></textarea>
                                            @endisset
                                            @isset($Bodegaseca->bso10)
                                            <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bsao10.{{$Bodegaseca->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bso10}}"></textarea>
                                            @endisset

                                            </td>
                                            <td class="text-center">
                                            <button wire:click='ActualizarBodegasSeca({{$Bodegaseca->id}})' class="btn btn-orange-500 text-white border" style="font-size: 11px;">
                                            <i class="fa-solid fa-pen"></i>
                                            Actualizar
                                            </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else

                                        @endif
                                    </tbody>
                                   </table>
                                  </div>
                                   @else

                                    @endif
                                    @break
                                    @case(2)
                                    @if (!is_null($zonaguardada))
                                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                        <tr class="cabecera " align="center">
                                            <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Bodega fría / Zona de almacenamiento en rack</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                4. Las cajas se apilan correctamente, no hay cajas desordenadas o mercadería con riesgo de caída.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                7. No existen objetos en desuso como cartones, madera, retazos de madera o stretch film adheridos al pallets.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                2. Los pallets están limpios, sin manchas, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                5. No existen cajas abiertas en niveles del 2 al 7 que favorezcan la contaminación cruzada del producto por acumulación de polvo.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                8. Las ubicaciones están identificadas, no existen rótulos que no correspondan al producto almacenado y se respecta los rótulos de identificación de áreas, clientes y/o productos.
                                            </td>
                                        </tr>
                                       <tr>
                                        <td class="border border-start-0" style="font-size:11px;">
                                            3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
                                        </td>
                                        <td class="border border-start-0" style="font-size:11px;">
                                            6. No existe doble fila de pallets que obstaculicen el tránsito en el pasillo; los extintores, cajetines y puertas de emergencia están despejadas.
                                        </td>
                                        <td class="border border-end-0" style="font-size:11px;">
                                            9. No existe stretch film colgando.
                                        </td>
                                       </tr>
                                        <tr>
                                            <td colspan="3" class="border-0" style="font-size:11px;" align="center">10. El pallets se encuentra ubicado correctamente en el rack (cuadrado en la viga o en el piso).</td>
                                        </tr>
                                      </table>

                                <div class="table-responsive">
                               <table class="table table-striped">
                                <thead style="background-color: #333; color: #fff">
                                 <tr>
                                    <th class="text-center">
                                        Pasillos
                                    </th>
                                    <th class="text-center">
                                        1
                                    </th>
                                    <th class="text-center">
                                        2
                                    </th>
                                    <th class="text-center">
                                        3
                                    </th>
                                    <th class="text-center">
                                        4
                                    </th>
                                    <th class="text-center">
                                        5
                                    </th>
                                    <th class="text-center">
                                        6
                                    </th>
                                    <th class="text-center">
                                        7
                                    </th>
                                    <th class="text-center">
                                        8
                                    </th>
                                    <th class="text-center">
                                        9
                                    </th>
                                    <th class="text-center">
                                        10
                                    </th>
                                    <th class="text-center">
                                        Observacion / ubicaciones
                                    </th>
                                    <th class="text-center">
                                        Acción
                                    </th>
                                 </tr>
                                </thead>
                                <tbody>
                                    @if (!is_null($zonaguardada))
                                    @foreach ($Bodegas as $Bodegasfria)
                                    <tr>
                                        <td class="text-center">
                                           {{$Bodegasfria->Pasillos->name}}
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazyn="bfa1.{{$Bodegasfria->id}}" class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf1}}" value="{{$Bodegasfria->bf1}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                        <input type="text" wire:model.prevent.lazy='bfa2.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf2}}" value="{{$Bodegasfria->bf2}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa3.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf3}}" value="{{$Bodegasfria->bf3}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa4.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf4}}" value="{{$Bodegasfria->bf4}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa5.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf5}}" value="{{$Bodegasfria->bf5}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa6.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf6}}" value="{{$Bodegasfria->bf6}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa7.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf7}}" value="{{$Bodegasfria->bf7}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa8.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf8}}" value="{{$Bodegasfria->bf8}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa9.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf9}}" value="{{$Bodegasfria->bf9}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                            <input type="text" wire:model.prevent.lazy='bfa10.{{$Bodegasfria->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasfria->bf10}}" value="{{$Bodegasfria->bf10}}" style="width: 50px">
                                        </td>
                                        <td class="text-center">
                                        @isset($Bodegasfria->bfo1)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao1.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo1}}" ></textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo2)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao2.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo2}}"> </textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo3)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao3.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo3}}" > </textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo4)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao4.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo4}}"> </textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo5)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao5.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo5}}"></textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo6)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao6.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo6}}"></textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo7)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao7.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo7}}"></textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo8)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao8.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo8}}"></textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo9)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao9.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegasfria->bfo9}}"></textarea>
                                        @endisset
                                        @isset($Bodegasfria->bfo10)
                                        <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bfao10.{{$Bodegasfria->id}}" class="form-control rounded" placeholder="{{$Bodegaseca->bfo10}}"></textarea>
                                        @endisset

                                        </td>
                                        <td class="text-center">
                                        <button class="btn btn-orange-500 text-white border" wire:click.prevent='ActulizarBodegaFria({{$Bodegasfria->id}})' style="font-size: 11px;" target="_blank" >
                                        <i class="fa-solid fa-pen"></i>
                                        Actualizar
                                        </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else

                                    @endif
                                </tbody>
                               </table>
                             </div>
                               @else

                                @endif
                                    @break
                                    @case(3)
                                    @if (!is_null($zonaguardada))
                                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                        <tr class="cabecera " align="center">
                                            <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Zona de reefer</strong></td>
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
                                        <td colspan="3" class="border border-start-0 border-end-0" style="font-size:12px;">
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
                                      <div class="table-responsive">
                                      <table class="table table-striped">
                                        <thead style="background-color: #333; color: #fff">
                                         <tr>
                                            <th class="text-center">
                                                Pasillos
                                            </th>
                                            <th class="text-center">
                                                1
                                            </th>
                                            <th class="text-center">
                                                2
                                            </th>
                                            <th class="text-center">
                                                3
                                            </th>
                                            <th class="text-center">
                                                4
                                            </th>
                                            <th class="text-center">
                                                5
                                            </th>
                                            <th class="text-center">
                                                6
                                            </th>
                                            <th class="text-center">
                                                Observacion / ubicaciones
                                            </th>
                                            <th class="text-center">
                                                Acción
                                            </th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                            @if (!is_null($zonaguardada))
                                            @foreach ($Bodegas as $Bodegasreefer)
                                            <tr>
                                                <td class="text-center">
                                                   {{$Bodegasreefer->Pasillos->name}}
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazyn="bra1.{{$Bodegasreefer->id}}" class="form-control rounded text-center" placeholder="{{$Bodegasreefer->br1}}" value="{{$Bodegasreefer->br1}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bra2.{{$Bodegasreefer->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasreefer->br2}}" value="{{$Bodegasreefer->br2}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bra3.{{$Bodegasreefer->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasreefer->br3}}" value="{{$Bodegasreefer->br3}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bra4.{{$Bodegasreefer->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasreefer->br4}}" value="{{$Bodegasreefer->br4}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bra5.{{$Bodegasreefer->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasreefer->br5}}" value="{{$Bodegasreefer->br5}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bra6.{{$Bodegasreefer->id}}' class="form-control rounded text-center" placeholder="{{$Bodegasreefer->br6}}" value="{{$Bodegasreefer->br6}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                @isset($Bodegasreefer->bro1)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="brao1.{{$Bodegasreefer->id}}" class="form-control rounded" placeholder="{{$Bodegasreefer->bro1}}" ></textarea>
                                                @endisset
                                                @isset($Bodegasreefer->bro2)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="brao2.{{$Bodegasreefer->id}}" class="form-control rounded" placeholder="{{$Bodegasreefer->bro2}}"> </textarea>
                                                @endisset
                                                @isset($Bodegasreefer->bro3)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="brao3.{{$Bodegasreefer->id}}" class="form-control rounded" placeholder="{{$Bodegasreefer->bro3}}" > </textarea>
                                                @endisset
                                                @isset($Bodegasreefer->bro4)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="brao4.{{$Bodegasreefer->id}}" class="form-control rounded" placeholder="{{$Bodegasreefer->bro4}}"> </textarea>
                                                @endisset
                                                @isset($Bodegasreefer->bro5)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="brao5.{{$Bodegasreefer->id}}" class="form-control rounded" placeholder="{{$Bodegasreefer->bro5}}"></textarea>
                                                @endisset
                                                @isset($Bodegasreefer->bro6)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="brao6.{{$Bodegasreefer->id}}" class="form-control rounded" placeholder="{{$Bodegasreefer->bro6}}"></textarea>
                                                @endisset
                                                </td>
                                                <td class="text-center">
                                                <button class="btn btn-orange-500 text-white border" wire:click.prevent='ActualizarBodegareefer({{$Bodegasreefer->id}})' style="font-size: 11px;" target="_blank" >
                                                <i class="fa-solid fa-pen"></i>
                                                Actualizar
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                      @else

                                      @endif
                                    </tbody>
                                    </table>
                                   </div>
                                    @else
                                    @endif
                                    @break
                                    @case(4)
                                    @if (!is_null($zonaguardada))
                                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                        <tr class="cabecera " align="center">
                                            <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Andenes, muelle de carga y patio de maniobras / Evaluación por naves</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                1. Las tulas o cajones para el reciclaje se usan correctamente (cartón, stretch film y retazos de madera separados e identificados)
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                3. Los utensilios de limpieza, conos de seguridad, reflectores y cizallas están ubicados en la zona asignadas correctamente ordenados.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                5. No existen objetos que obstaculicen el acceso a cajetines y/o extintores de la red contra incendio.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-end" style="font-size:11px;">
                                                2. Las estaciones para monitoreo de roedores se encuentran despejadas (zona interna y externa de puertas).
                                            </td>
                                            <td class="border-end" style="font-size:11px;">
                                                4. Los modulares/escritorios están ordenados y limpios.
                                            </td>
                                            <td class="border-0" style="font-size:11px;">
                                                 6. Las puertas de andenes se mantienen cerradas si no hay vehículo estacionado.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="border-0" style="font-size:11px;" align="center">7. El patio de maniobras se mantiene despejado (sin acumulación de pallets, producto u objetos).</td>
                                        </tr>
                                      </table>
                                      <div class="table-responsive">
                                      <table class="table table-striped">
                                        <thead style="background-color: #333; color: #fff">
                                         <tr>
                                            <th class="text-center">
                                                Pasillos
                                            </th>
                                            <th class="text-center">
                                                1
                                            </th>
                                            <th class="text-center">
                                                2
                                            </th>
                                            <th class="text-center">
                                                3
                                            </th>
                                            <th class="text-center">
                                                4
                                            </th>
                                            <th class="text-center">
                                                5
                                            </th>
                                            <th class="text-center">
                                                6
                                            </th>
                                            <th class="text-center">
                                                7
                                            </th>
                                            <th class="text-center">
                                                Observacion / ubicaciones
                                            </th>
                                            <th class="text-center">
                                                Acción
                                            </th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                            @if (!is_null($zonaguardada))
                                            @foreach ($Bodegas as $BodegasAndenes)
                                            <tr>
                                                <td class="text-center">
                                                   {{$BodegasAndenes->Pasillos->name}}
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazyn="baa1.{{$BodegasAndenes->id}}" class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba1}}" value="{{$BodegasAndenes->ba1}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='baa2.{{$BodegasAndenes->id}}' class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba2}}" value="{{$BodegasAndenes->ba2}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='baa3.{{$BodegasAndenes->id}}' class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba3}}" value="{{$BodegasAndenes->ba3}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='baa4.{{$BodegasAndenes->id}}' class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba4}}" value="{{$BodegasAndenes->ba4}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='baa5.{{$BodegasAndenes->id}}' class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba5}}" value="{{$BodegasAndenes->ba5}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='baa6.{{$BodegasAndenes->id}}' class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba6}}" value="{{$BodegasAndenes->ba6}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='baa7.{{$BodegasAndenes->id}}' class="form-control rounded text-center" placeholder="{{$BodegasAndenes->ba7}}" value="{{$BodegasAndenes->ba7}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                @isset($BodegasAndenes->bao1)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao1.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao1}}" ></textarea>
                                                @endisset
                                                @isset($BodegasAndenes->bao2)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao2.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao2}}"> </textarea>
                                                @endisset
                                                @isset($BodegasAndenes->bao3)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao3.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao3}}" > </textarea>
                                                @endisset
                                                @isset($BodegasAndenes->bao4)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao4.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao4}}"> </textarea>
                                                @endisset
                                                @isset($BodegasAndenes->bao5)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao5.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao5}}"></textarea>
                                                @endisset
                                                @isset($BodegasAndenes->bao6)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao6.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao6}}"></textarea>
                                                @endisset
                                                @isset($BodegasAndenes->bao7)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="baao7.{{$BodegasAndenes->id}}" class="form-control rounded" placeholder="{{$BodegasAndenes->bao7}}"></textarea>
                                                @endisset
                                                </td>
                                                <td class="text-center">
                                                <button class="btn btn-orange-500 text-white border" wire:click.prevent='ActualizarBodegaAndenes({{$BodegasAndenes->id}})' style="font-size: 11px;" target="_blank" >
                                                <i class="fa-solid fa-pen"></i>
                                                Actualizar
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                      @else

                                      @endif
                                    </tbody>
                                    </table>
                                      </div>
                                    @else
                                    @endif
                                    @break
                                    @case(5)
                                    @if (!is_null($zonaguardada))
                                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                        <tr class="cabecera " align="center">
                                            <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Bodega seca / Zona de supermercado</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                1. El piso del pasillo está limpio, no hay papeles, madera o astillas de ella, cartones o trozos, líquidos o lubricante derramado.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                5. No existe doble fila de pallets y/o roles que obstaculicen el tránsito; los extintores, cajetines y puertas de emergencia están despejadas.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                9. El material de reciclaje está correctamente apilado y tienen una zona de acopio asignado y rotulado.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                2. Los pallets y/o baldas están limpias, sin manchas o polvo acumulado, sin trozos o tacos de madera faltante, clavos expuestos, residuos de producto o evidencia de plaga o polilla.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                6. Las gavetas están ordenadas, apiladas, limpias y tienen una zona de almacenamiento asignada y rotulada.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                10. Los productos frágiles (vidrio) se ubican de tal manera que no tienen un riesgo de caída.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                3. El producto almacenado está en buen estado, no presenta daño del empaque, derrame o producto expuesto por golpe/manipulación.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                7. Las jaulas están identificadas, limpias y tienen una zona de almacenamiento asignada y rotulada.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                11. No existen objetos en desuso como cartones, madera, retazos de madera, stretch film o papeles en ubicaciones.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                4. El producto se acomoda correctamente sobre pallets, ordenados por artículos, no hay producto en piso o cajas desordenadas.
                                            </td>
                                            <td class="border border-start-0" style="font-size:11px;">
                                                8. La zona de roles está ordenada e identificada, los roles están alineados, agrupados y correctamente ubicados.
                                            </td>
                                            <td class="border border-end-0" style="font-size:11px;">
                                                12. Las ubicaciones están identificadas y no existen rótulos que no correspondan al producto almacenado.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="border-0" style="font-size:11px;" align="center">13. No existe stretch film colgando.</td>
                                        </tr>
                                      </table>
                                      <div class="table-responsive">
                                      <table class="table table-striped" width="100%" cellspacing="0" cellpadding="3">
                                        <thead style="background-color: #333; color: #fff">
                                         <tr>
                                            <th class="text-center">
                                                Pasillos
                                            </th>
                                            <th class="text-center">
                                                1
                                            </th>
                                            <th class="text-center">
                                                2
                                            </th>
                                            <th class="text-center">
                                                3
                                            </th>
                                            <th class="text-center">
                                                4
                                            </th>
                                            <th class="text-center">
                                                5
                                            </th>
                                            <th class="text-center">
                                                6
                                            </th>
                                            <th class="text-center">
                                                7
                                            </th>
                                            <th class="text-center">
                                                8
                                            </th>
                                            <th class="text-center">
                                                9
                                            </th>
                                            <th class="text-center">
                                                10
                                            </th>
                                            <th class="text-center">
                                                11
                                            </th>
                                            <th class="text-center">
                                                12
                                            </th>
                                            <th class="text-center">
                                                13
                                            </th>
                                            <th class="text-center">
                                                Observacion / ubicaciones
                                            </th>
                                            <th class="text-center">
                                                Acción
                                            </th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                            @if (!is_null($zonaguardada))
                                            @foreach ($Bodegas as $BodegasLiris)
                                            <tr>
                                                <td class="text-center">
                                                   {{$BodegasLiris->Pasillos->name}}
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazyn="bama1.{{$BodegasLiris->id}}" class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam1}}" value="{{$BodegasLiris->bam1}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bama2.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam2}}" value="{{$BodegasLiris->bam2}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama3.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam3}}" value="{{$BodegasLiris->bam3}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama4.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam4}}" value="{{$BodegasLiris->bam4}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama5.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam5}}" value="{{$BodegasLiris->bam5}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama6.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam6}}" value="{{$BodegasLiris->bam6}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama7.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam7}}" value="{{$BodegasLiris->bam7}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama8.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam8}}" value="{{$BodegasLiris->bam8}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama9.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam9}}" value="{{$BodegasLiris->bam9}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama10.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam10}}" value="{{$BodegasLiris->bam10}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama11.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam11}}" value="{{$BodegasLiris->bam11}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama12.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam12}}" value="{{$BodegasLiris->bam12}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bama13.{{$BodegasLiris->id}}' class="form-control rounded text-center" placeholder="{{$BodegasLiris->bam13}}" value="{{$BodegasLiris->bam13}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                @isset($BodegasLiris->bamo1)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao1.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo1}}" ></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo2)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao2.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo2}}"> </textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo3)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao3.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo3}}" > </textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo4)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao4.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo4}}"> </textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo5)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao5.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo5}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo6)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao6.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo6}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo7)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao7.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo7}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo8)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao8.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo8}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo9)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao9.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo9}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo10)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao10.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo10}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo11)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao11.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo11}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo12)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao12.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo12}}"></textarea>
                                                @endisset
                                                @isset($BodegasLiris->bamo13)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bamao13.{{$BodegasLiris->id}}" class="form-control rounded" placeholder="{{$BodegasLiris->bamo13}}"></textarea>
                                                @endisset
                                                </td>
                                                <td class="text-center">
                                                <button class="btn btn-orange-500 text-white border" wire:click.prevent='ActualizarBodegaliris({{$BodegasLiris->id}})' style="font-size: 11px;" target="_blank" >
                                                <i class="fa-solid fa-pen"></i>
                                                Actualizar
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                      @else

                                      @endif
                                    </tbody>
                                    </table>
                                    </div>
                                    @else
                                    @endif

                                    @break
                                    @case(6)
                                    @if (!is_null($zonaguardada))
                                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                        <tr class="cabecera " align="center">
                                            <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Zona de contenedores para averías y área de tuberías</strong></td>
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
                                      <div class="table-responsive">
                                      <table class="table table-striped" width="100%" cellspacing="0" cellpadding="3">
                                        <thead style="background-color: #333; color: #fff">
                                         <tr>
                                            <th class="text-center">
                                                Pasillos
                                            </th>
                                            <th class="text-center">
                                                1
                                            </th>
                                            <th class="text-center">
                                                2
                                            </th>
                                            <th class="text-center">
                                                3
                                            </th>
                                            <th class="text-center">
                                                Observacion / ubicaciones
                                            </th>
                                            <th class="text-center">
                                                Acción
                                            </th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                            @if (!is_null($zonaguardada))
                                            @foreach ($Bodegas as $Bodegascontendedores)
                                            <tr>
                                                <td class="text-center">
                                                   {{$Bodegascontendedores->Pasillos->name}}
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazyn="ccta1.{{$Bodegascontendedores->id}}" class="form-control rounded text-center" placeholder="{{$Bodegascontendedores->cct}}" value="{{$Bodegascontendedores->cct}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='ccta2.{{$Bodegascontendedores->id}}' class="form-control rounded text-center" placeholder="{{$Bodegascontendedores->cct2}}" value="{{$Bodegascontendedores->cct2}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='ccta3.{{$Bodegascontendedores->id}}' class="form-control rounded text-center" placeholder="{{$Bodegascontendedores->cct3}}" value="{{$Bodegascontendedores->cct3}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                @isset($Bodegascontendedores->ccto1)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="cctao1.{{$Bodegascontendedores->id}}" class="form-control rounded" placeholder="{{$Bodegascontendedores->ccto1}}" ></textarea>
                                                @endisset
                                                @isset($Bodegascontendedores->ccto2)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="cctao2.{{$Bodegascontendedores->id}}" class="form-control rounded" placeholder="{{$Bodegascontendedores->ccto2}}"> </textarea>
                                                @endisset
                                                @isset($Bodegascontendedores->ccto3)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="cctao3.{{$Bodegascontendedores->id}}" class="form-control rounded" placeholder="{{$Bodegascontendedores->ccto3}}" > </textarea>
                                                @endisset
                                                </td>
                                                <td class="text-center">
                                                <button class="btn btn-orange-500 text-white border" wire:click.prevent='ActualizarBodegaConedor({{$Bodegascontendedores->id}})' style="font-size: 11px;" target="_blank" >
                                                <i class="fa-solid fa-pen"></i>
                                                Actualizar
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                      @else

                                      @endif
                                    </tbody>
                                    </table>
                                    </div>
                                    @else
                                    @endif
                                    @break
                                    @case(7)
                                    @if (!is_null($zonaguardada))
                                    <table width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                        <tr class="cabecera " align="center">
                                            <td colspan="3" class="border border-dark" style="font-size:13px; color:black;"><strong>Contorno de bodega y perímetro del CD</strong></td>
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
                                      <div class="table-responsive">
                                      <table class="table table-striped" width="100%" cellspacing="0" cellpadding="3">
                                        <thead style="background-color: #333; color: #fff">
                                         <tr>
                                            <th class="text-center">
                                                Pasillos
                                            </th>
                                            <th class="text-center">
                                                1
                                            </th>
                                            <th class="text-center">
                                                2
                                            </th>
                                            <th class="text-center">
                                                3
                                            </th>
                                            <th class="text-center">
                                                Observacion / ubicaciones
                                            </th>
                                            <th class="text-center">
                                                Acción
                                            </th>
                                         </tr>
                                        </thead>
                                        <tbody>
                                            @if (!is_null($zonaguardada))
                                            @foreach ($Bodegas as $BodegasPerimetral)
                                            <tr>
                                                <td class="text-center">
                                                   {{$BodegasPerimetral->Pasillos->name}}
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazyn="bpa1.{{$BodegasPerimetral->id}}" class="form-control rounded text-center" placeholder="{{$BodegasPerimetral->bp1}}" value="{{$BodegasPerimetral->bp1}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                <input type="text" wire:model.prevent.lazy='bpa2.{{$BodegasPerimetral->id}}' class="form-control rounded text-center" placeholder="{{$BodegasPerimetral->bp2}}" value="{{$BodegasPerimetral->bp2}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" wire:model.prevent.lazy='bpa3.{{$BodegasPerimetral->id}}' class="form-control rounded text-center" placeholder="{{$BodegasPerimetral->bp3}}" value="{{$BodegasPerimetral->bp3}}" style="width: 50px">
                                                </td>
                                                <td class="text-center">
                                                @isset($BodegasPerimetral->bpo1)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bpao1.{{$BodegasPerimetral->id}}" class="form-control rounded" placeholder="{{$BodegasPerimetral->bpo1}}" ></textarea>
                                                @endisset
                                                @isset($BodegasPerimetral->bpo2)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bpao2.{{$BodegasPerimetral->id}}" class="form-control rounded" placeholder="{{$BodegasPerimetral->bpo2}}"> </textarea>
                                                @endisset
                                                @isset($BodegasPerimetral->bpo3)
                                                <textarea name="" id="" cols="30" rows="2" wire:model.prevent.lazy="bpao3.{{$BodegasPerimetral->id}}" class="form-control rounded" placeholder="{{$BodegasPerimetral->bpo3}}" > </textarea>
                                                @endisset
                                                </td>
                                                <td class="text-center">
                                                <button class="btn btn-orange-500 text-white border" wire:click.prevent='ActualizarBodegaPerimetro({{$BodegasPerimetral->id}})' style="font-size: 11px;" target="_blank" >
                                                <i class="fa-solid fa-pen"></i>
                                                Actualizar
                                                </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                      @else

                                      @endif
                                    </tbody>
                                    </table>
                                    </div>
                                    @else
                                    @endif
                                    @break

                                    @default

                                        @endswitch
                                </div>
                                </x-slot>
                                <x-slot name='footer'>
                                    <x-jet-secondary-button wire:click.prevent="$set('open', false)">
                                        Cancelar
                                    </x-jet-secondary-button>
                                    {{-- <x-jet-danger-button wire:click.prevent="">
                                        Guardar
                                    </x-jet-danger-button> --}}
                                </x-slot>
                              </x-jet-dialog-modal>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@push('scripts')
{{-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('alert', function(message){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
             message,
        });
    });
</script> --}}
<script>
    Livewire.on('envio', function(message){
        Swal.fire({
            position: "center",
            title:'¡Gracias!',
            icon:'success',
            text: message,
            showConfirmButton: false,
            timer: 1500
        });
    });
</script>

@endpush
</div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #4d6a88; color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">Tabla de Valorización Check List</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive-md">
                        <table class="table">
                            <tr>
                            <p align="center" class="text-center bg-lead-500 border border-dark text-white"><b><span> CRITERIOS DE CALIFICACIÓN</span> </b></p>
                            <tr>
                                <td class="text-center border border-dark">
                                    CUMPLE (2)
                                </td>
                                <td class="text-center border border-dark">
                                    CUMPLE PARCIALMENTE (1)
                                </td>
                                <td class="text-center border border-dark">
                                    NO CUMPLE (0)
                                </td>
                            </tr>
                            </tr>

                            <tr>
                                <td class="text-center border border-dark">
                                El items evaluado se cumple en su totalidad. No se evidencia incumplimiento alguno (0 hallazgos).
                                </td>
                                <td class="text-center border border-dark">
                                    El items evaluado se cumple de forma parcial y se evidencia un bajo número de incumplimientos (1-2 hallazgos).
                                </td>
                                <td class="text-center border border-dark">
                                    El items evaluado se cumple de forma parcial y se evidencia un número significativo de incumplimientos (más de 4 hallazgos).
                                </td>
                            </tr>
                        </table>
                        <table class="table">
                            <tr>
                                <p align="center" class="text-center bg-lead-500 border border-dark text-white"><b><span> CALIFICACIÓN</span></b></p>
                                <tr>
                                    <td class="text-center border border-dark">
                                        Requiere mejora ≤ 74
                                    </td>
                                    <td class="text-center border border-dark">
                                        Regular 75 - 84 %
                                    </td>
                                    <td class="text-center border border-dark">
                                        Bueno 85 - 90 %
                                    </td>
                                    <td class="text-center border border-dark">
                                        Excelente ≥ 91 %
                                    </td>
                                </tr>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>