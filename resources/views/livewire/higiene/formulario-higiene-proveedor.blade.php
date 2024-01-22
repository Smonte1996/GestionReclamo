<div>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Prácticas higiénicas</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                        <div class="input-group">
                                <button class="btn btn-green-500 text-white rounded" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Tabla de valorización</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Formulario de prácticas higiénicas del personal Proveedor (estiba y limpieza)</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div x-data="{textselect:'null'}">

                                    <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                    <label for="fecha" class="form-label fs-6 text-lead-500">Fecha:</label>
                                    <input type="date" class="form-control rounded @error('fecha') is-invalid @enderror" wire:model.defer="fecha" name="fecha" id="fecha" required>
                                        @error('fecha')
                                            <small id="fechahelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                    <div class="col-sm-12 col-md-4">
                                        <div class="mb-3">
                                    <label for="Evaluador" class="form-label fs-6 text-lead-500">Evaluador:</label>
                                    <select class="form-control rounded @error('Evaluador') is-invalid @enderror" wire:model.defer="Evaluador" name="Evaluador" id="Evaluador" required>
                                       <option value="">Seleccionar una opción </option>
                                       <option value="Walter Fuentes">Walter Fuentes</option>
                                       <option value="Kevin Siñalin">Kevin Siñalin</option>
                                       <option value="Evelyn Ganan">Evelyn Ganan</option>
                                    </select>
                                        @error('Evaluador')
                                            <small id="EvaluadorhelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="Almacen" class="form-label fs-6 text-lead-500">Almacén:</label>
                                <select class="form-control rounded @error('Almacen') is-invalid @enderror" wire:model.defer="Almacen" name="Almacen" id="Almacen" required x-model="textselect">
                                   <option value="">Seleccionar una opción </option>
                                   <option value="Bodega Gye">Bodega Gye</option>
                                   <option value="Bodega Uio">Bodega Uio</option>
                                </select>
                                    @error('Almacen')
                                        <small id="AlmacenhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                              @if (!is_null($this->Infor_ph))
                              <div x-data="{provedoruio:'null'}">
                                <div class="col-sm-12 col-md-4" x-show="textselect == 'Bodega Uio'">
                                    <div class="mb-3">
                                    <label for="Proveedor" class="form-label fs-6 text-lead-500">Proveedor:</label>
                                    <select class="form-control rounded Selector @error('Proveedor') is-invalid @enderror" wire:model.defer="Proveedor" name="Proveedor" id="Personal" required x-model="provedoruio">
                                        <option value="">Seleccionar una opción</option>
                                        <option value="Estibadores A.B">Estibadores A.B</option>
                                        <option value="Logiktel">Logiktel</option>
                                        <option value="Rubasa">Rubasa</option>
                                    </select>
                                        @error('Proveedor')
                                            <small id="ProveedorhelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4" x-show="textselect == 'Bodega Uio'&& provedoruio == 'Estibadores A.B' || provedoruio == 'Logiktel'">
                                    <div class="mb-3">
                                    <label for="Supervisores" class="form-label fs-6 text-lead-500">Supervisor:</label>
                                    <select class="form-control rounded @error('Supervisores') is-invalid @enderror" wire:model.defer="Supervisores" name="Supervisores" id="Supervisores" required>
                                        <option value="">Seleccionar una opción</option>
                                       <option value="Lenin Jeison Itaz Chango">Lenin Jeison Itaz Chango</option>
                                    </select>
                                        @error('Supervisores')
                                            <small id="SupervisoreshelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-4" x-show="textselect == 'Bodega Uio' && provedoruio == 'Rubasa'">
                                    <div class="mb-3">
                                    <label for="Supervisores" class="form-label fs-6 text-lead-500">Supervisor:</label>
                                    <select class="form-control rounded @error('Supervisores') is-invalid @enderror" wire:model.defer="Supervisores" name="Supervisores" id="Supervisores" required>
                                        <option value="">Seleccionar una opción</option>
                                        
                                       <option value="Byron Villacreces">Byron Villacreces</option>
                                       
                                    </select>
                                        @error('Supervisores')
                                            <small id="SupervisoreshelpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                              </div>

                            {{-- </div>--}}
                            <div x-data="{proveedor:'null'}">

                            <div class="col-sm-12 col-md-4" x-show="textselect== 'Bodega Gye'">
                                <div class="mb-3">
                                <label for="Proveedor" class="form-label fs-6 text-lead-500">Proveedor:</label>
                                <select class="form-control rounded Selector @error('Proveedor') is-invalid @enderror" wire:model.defer="Proveedor" name="Proveedor" id="Personal" required x-model="proveedor">
                                    <option value="">Seleccionar una opción</option>
                                    <option value="Estibas Torres">Estibas Torres</option>
                                    <option value="Rubasa">Rubasa</option>
                                    <option value="Estibas JQ">Estibas JQ</option>
                                    <option value="Estibas Padilla">Estibas Padilla</option>
                                    <option value="Estibas Choez">Estibas Choez</option>
                                    <option value="Estibas Estigua">Estibas Estigua</option>
                                </select>
                                    @error('Proveedor')
                                        <small id="ProveedorhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4" x-show="proveedor == 'Estibas Torres'  || proveedor == 'Estibas JQ' || proveedor == 'Estibas Padilla' || proveedor == 'Estibas Choez' || proveedor == 'Estibas Estigua'">
                                <div class="mb-3">
                                <label for="Supervisores" class="form-label fs-6 text-lead-500">Supervisor:</label>
                                <select class="form-control rounded @error('Supervisores') is-invalid @enderror" wire:model.defer="Supervisores" name="Supervisores" id="Supervisores" required>
                                    <option value="">Seleccionar una opción</option>
                                    {{-- @foreach ($supervisores as $supervisor )
                                       <option value="{{$supervisor->id}}">{{$supervisor->name}} {{$supervisor->lastname}}</option>
                                   @endforeach --}}
                                   <option value="Magaly Marlene Guzman">Magaly Marlene Guzman</option>
                                </select>
                                    @error('Supervisores')
                                        <small id="SupervisoreshelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4" x-show="proveedor== 'Rubasa'">
                                <div class="mb-3">
                                <label for="Supervisores" class="form-label fs-6 text-lead-500">Supervisor:</label>
                                <select class="form-control rounded @error('Supervisores') is-invalid @enderror" wire:model.defer="Supervisores" name="Supervisores" id="Supervisores" required>
                                    <option value="">Seleccionar una opción</option>
                                    {{-- @foreach ($supervisores as $supervisor )
                                       <option value="{{$supervisor->id}}">{{$supervisor->name}} {{$supervisor->lastname}}</option>
                                   @endforeach --}}
                                   {{-- <option value="Byron Villacreces">Byron Villacreces</option> --}}
                                   <option value="Abel Montes">Abel Montes</option>
                                </select>
                                    @error('Supervisores')
                                        <small id="SupervisoreshelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label fs-6 text-lead-500">Personal Operativo:</label>
                                <input type="text" class="form-control rounded Selector @error('Personal') is-invalid @enderror" wire:model.defer="Personal" name="Personal" id="Personal" required>

                                    @error('Personal')
                                        <small id="PersonalhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            </div>
                        </div>
                             @else

                            <div class="col-sm-12 col-md-4 pb-3">
                                <div class="pt-4">
                                <label for="almacen" class="form-label"></label>
                                    <button class="btn btn-success" wire:click='GuardarInfor'> Empezar </button>
                                </div>
                            </div>
                         @endif
                        </div>

                        <div class="col-sm-12 col-md-12 pb-0 d-flex justify-content-end">
                            <div class="pt-0">
                            <label for="almacen" class="form-label"></label>
                                <button class="btn btn-success" wire:click.prevent='CumpleTodo'> Cumple Todo</button>
                            </div>
                        </div>

                        <fieldset class="border border-2 rounded-2">
                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Puntos a Evaluar</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Puntos a Evaluar</legend>
                        <div class="row pt-4">

                            
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">

                                <label for="" class="form-label text-dark">Uniforme completo y limpio.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('puc') is-invalid @enderror" wire:model.defer="puc" name="" id="uc" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple Parcialmente</option>
                                        <option value="0">No cumple</option>
                                         @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3" >
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('puc1') is-invalid @enderror" wire:model.defer="puc1" placeholder='Detalle del incumplimientos'>

                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('puc2') is-invalid @enderror" wire:model.defer="puc2" placeholder="Detalle de acciones tomadas">

                                    </div>
                                    </div>

                                   
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Botas limpias, en buen estado y cordones atados.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('pbl') is-invalid @enderror" wire:model.defer="pbl" name="" id="" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple Parcialmente</option>
                                        <option value="0">No cumple</option>
                                        @else

                                        @endif
                                    </select>

                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('pbl1') is-invalid @enderror" wire:model.defer="pbl1" placeholder='Detalle del incumplimientos'>

                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2" >
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('pbl2') is-invalid @enderror" wire:model.defer="pbl2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Casco limpio, en buen estado y con nombre y apellido.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('pbl') is-invalid @enderror" wire:model.defer="pcl" name="" id="" required>
                                        <option value="null">Seleccionar una opción</option>
                                        @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple Parcialmente</option>
                                        <option value="0">No cumple</option>
                                         @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3" >
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('pcl1') is-invalid @enderror" wire:model.defer="pcl1" placeholder='Detalle del incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('pcl2') is-invalid @enderror" wire:model.defer="pcl2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                 
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">No usa accesorios (reloj, cadena, anillo, pulsera, etc.).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('pna') is-invalid @enderror" wire:model.defer="pna" name="pna" id="pna" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple Parcialmente</option>
                                        <option value="0">No cumple</option>
                                         @else

                                        @endif
                                    </select>

                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('pna1') is-invalid @enderror" wire:model.defer="pna1" placeholder='Detalle del incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2" >
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('pna2') is-invalid @enderror" id="pna2" wire:model.defer="pna2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Cabello Correctamente peinado (mantiene buen aspecto).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('pcp') is-invalid @enderror" wire:model.defer="pcp" name="pcp" id="pcp"  required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple Parcialmente</option>
                                        <option value="0">No cumple</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('pcp1') is-invalid @enderror"  wire:model.defer="pcp1" placeholder='Detalle del incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2" >
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('pcp2') is-invalid @enderror" wire:model.defer="pcp2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="cp3">
                                       </div>
                                        </div> --}}
                               {{-- </div>

                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Uñas cortas y limpias (aplica para personal operativo).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('pul') is-invalid @enderror" wire:model.defer="pul" name="pul" id="pul" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">Cumple Parcialmente</option>
                                        <option value="0">No cumple</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('pul1') is-invalid @enderror" wire:model.defer="pul1" placeholder='Detalle del incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2" >
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('pul2') is-invalid @enderror" wire:model.defer="pul2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                               </div>
                            </fieldset>
                            <div class="pt-4 text-center">
                                 <button class="btn btn-primary" wire:click='GuardarProveedor()'>Guardar</button>
                                @if (!is_null($this->Practica_Provvedor))
                                <button class="btn btn-danger" wire:loading.attr='disabled' wire:click='Enviar' wire:target='Enviar' class="disabled:opacity-60">Enviar</button>
                                @else

                                @endif

                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
   </div>
  @push('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Livewire.on('alert', function(message){
    Swal.fire({
     position: "center",
     title:'¡Gracias!',
     icon:'success',
     text: message,
     showConfirmButton: false,
     timer: 1500
    })
  });
</script>
   @endpush
</div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #4d6a88; color: white;">
                    <h5 class="modal-title" id="exampleModalLabel">Tabla de Valorización</h5>
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

                            {{-- <tr>
                                <td class="text-center border border-dark">
                                El items evaluado se cumple en su totalidad. No se evidencia incumplimiento alguno (0 hallazgos).
                                </td>
                                <td class="text-center border border-dark">
                                    El items evaluado se cumple de forma parcial y se evidencia un bajo número de incumplimientos (1-3 hallazgos).
                                </td>
                                <td class="text-center border border-dark">
                                    El items evaluado se cumple de forma parcial y se evidencia un número significativo de incumplimientos (más de 4 hallazgos).
                                </td>
                            </tr> --}}
                        </table>
                        <table class="table">
                            <tr>
                                <p align="center" class="text-center bg-lead-500 border border-dark text-white"><b><span> CALIFICACIÓN</span></b></p>
                                <tr>
                                    <td class="text-center border border-dark">
                                        Deficiente ≤ 70
                                    </td>
                                    <td class="text-center border border-dark">
                                        Aceptable 70 - 85 %
                                    </td>
                                    <td class="text-center border border-dark">
                                        Bueno 85 - 95 %
                                    </td>
                                    <td class="text-center border border-dark">
                                        Muy bueno ≥ 95 - 100 %
                                    </td>
                                </tr>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
