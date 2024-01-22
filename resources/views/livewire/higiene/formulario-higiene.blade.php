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
                            <h2>Formulario de prácticas higiénicas del personal Ransa</h2>
                            <div class="clearfix"></div>
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

                              @if (!is_null($this->Infor_ph))
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label fs-6 text-lead-500">Supervisor:</label>
                                <select class="form-control rounded @error('Supervisor') is-invalid @enderror" wire:model.defer="Supervisor" name="Supervisor" id="Supervisor">
                                   <option value="">Seleccionar una opción </option>
                                   @switch($this->Infor_ph->almacen)
                                       @case('Bodega Uio')
                                       @foreach ($supervisoresUio as $supervisorU )
                                       <option value="{{$supervisorU->id}}">{{$supervisorU->name}} {{$supervisorU->lastname}}</option>
                                       @endforeach
                                           @break

                                       @default
                                       @foreach ($supervisores as $supervisor )
                                       <option value="{{$supervisor->id}}">{{$supervisor->name}} {{$supervisor->lastname}}</option>
                                       @endforeach
                                   @endswitch
                                </select>
                                    @error('Supervisor')
                                        <small id="SupervisorhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label fs-6 text-lead-500">Personal Operativo:</label>
                                <select class="form-control rounded Selector @error('Personal') is-invalid @enderror" wire:model.defer="Personal" name="Personal" id="Personal">
                                   <option value="">Seleccionar una opción </option>
                                   @switch($this->Infor_ph->almacen)
                                       @case('Bodega Uio')
                                       @foreach ($personalUIO as $personaU)
                                       <option value="{{$personaU->id}}">{{$personaU->name}} {{$personaU->lastname}}</option>
                                       @endforeach
                                           @break

                                       @default
                                       @foreach ($personal as $persona)
                                       <option value="{{$persona->id}}">{{$persona->name}} {{$persona->lastname}}</option>
                                       @endforeach
                                   @endswitch
                                </select>
                                    @error('Personal')
                                        <small id="PersonalhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                              @else 

                            <div class="col-sm-12 col-md-4 pb-3">
                                <div class="pt-4">
                                <label for="almacen" class="form-label"></label>
                                
                                    <button class="btn btn-success" wire:click='Guardar'> Empezar </button>
                                </div>
                            </div>
                              @endif 
                        </div>

                        <fieldset class="border border-2 rounded-2">
                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Puntos a Evaluar</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Puntos a Evaluar</legend>
                        <div class="row pt-4">

                            
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">

                                <label for="" class="form-label text-dark">Uniforme completo y limpio (ambiente seco, refrigerado o congelado).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('uc') is-invalid @enderror" wire:model.defer="uc" name="" id="uc" required>
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
                                    <input type="text" class="form-control rounded @error('uc1') is-invalid @enderror" id="uc1" wire:model.defer="uc1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('uc2') is-invalid @enderror" id="uc2" wire:model.defer="uc2" placeholder="Detalle de acciones tomadas">
                                    </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2 "  x-show="textselect== 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded @error('uc2') is-invalid @enderror" wire:model.defer="uc3">
                                            @error('uc3')
                                            <small id="uc3helpId"
                                                class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                       </div>
                                        </div> --}}
                               {{-- </div> --}}

                               {{-- <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Botas limpias, en buen estado y cordones atados.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('bl') is-invalid @enderror" wire:model.defer="bl" name="" id="" required>
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
                                    <input type="text" class="form-control rounded @error('bl1') is-invalid @enderror" wire:model.defer="bl1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('bl2') is-invalid @enderror" wire:model.defer="bl2" placeholder="Detalle de acciones tomadas">
                                        
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect== 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded @error('bl3') is-invalid @enderror" wire:model.defer="bl3">
                                            @error('bl3')
                                           <small id="bl3helpId"
                                           class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                           @enderror
                                       </div>
                                        </div> --}}
                               {{-- </div> --}}

                               {{-- <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Casco limpio, en buen estado y con nombre y apellido.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('cl') is-invalid @enderror" wire:model.defer="cl" name="cl" id="cl" required>
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
                                    <input type="text" class="form-control rounded @error('cl1') is-invalid @enderror" wire:model.defer="cl1" id="cl1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('cl2') is-invalid @enderror" wire:model.defer="cl2" id="cl2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2" x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="cl3">
                                       </div>
                                        </div> --}}
                               {{-- </div> --}}

                               {{-- <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">No usa accesorios (reloj, cadena, anillo, pulsera, etc.).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('na') is-invalid @enderror" wire:model.defer="na" name="" id="na" required>
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
                                    <input type="text" class="form-control rounded @error('na1') is-invalid @enderror" wire:model.defer="na1" id="na1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('na2') is-invalid @enderror" wire:model.defer="na2" id="na2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="na3">
                                       </div>
                                        </div> --}}
                               {{-- </div>

                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">Cabello Correctamente peinado (mantiene buen aspecto).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('cp') is-invalid @enderror" wire:model.defer="cp" name="" id="cp" required>
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
                                    <input type="text" class="form-control rounded @error('cp1') is-invalid @enderror"  wire:model.defer="cp1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('cp2') is-invalid @enderror" wire:model.defer="cp2" placeholder="Detalle de acciones tomadas">
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
                                    <select class="form-control @error('ul') is-invalid @enderror" wire:model.defer="ul" name="" id="ul" required>
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
                                    <input type="text" class="form-control rounded @error('ul1') is-invalid @enderror" id="ul1" wire:model.defer="ul1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('ul2') is-invalid @enderror" id="ul2" wire:model.defer="ul2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                            </fieldset>
                            <div class="pt-4 text-center">
                                 <button class="btn btn-primary" wire:click='ValidacionPH'>Guardar</button>
                                 @if (!is_null($this->Practicashg))
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
    <script>
        Livewire.on('select2', function() {
            $('.Selector').on('change', function(e){
                @this.set('Personal', e.target.value);
            });
            $(".Selector").select2();
           });
    </script>
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
  })
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
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
