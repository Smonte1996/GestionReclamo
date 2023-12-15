
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
                            <h2>Formulario de prácticas higiénicas del personal Maquila</h2>
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
                                    <label for="Evaluador" class="form-label fs-6 text-lead-500">Evaluador:</label>
                                    <select class="form-control rounded @error('Evaluador') is-invalid @enderror" wire:model.defer="Evaluador" name="Evaluador" id="Evaluador">
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
                                <select class="form-control rounded @error('Almacen') is-invalid @enderror" wire:model.defer="Almacen" name="Almacen" id="Almacen">
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

                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="Proveedor" class="form-label fs-6 text-lead-500">Proveedor:</label>
                                <select class="form-control rounded @error('Proveedor') is-invalid @enderror" wire:model.defer="Proveedor" name="Proveedor">
                                    <option value="">Seleccionar una opción</option>
                                    <option value="Dprissa">Dprissa</option>
                                    <option value="Seryproc">Seryproc</option>
                                </select>
                                    @error('Proveedor')
                                        <small id="ProveedorhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                             @if (!is_null($this->Infor_ph))
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label fs-6 text-lead-500">Supervisor:</label>
                                <input type="text" class="form-control rounded @error('Supervisor') is-invalid @enderror" wire:model.defer="Supervisor" name="Supervisor" id="Supervisor">
                                    @error('Supervisor')
                                        <small id="SupervisorhelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="Personal_Maquila" class="form-label fs-6 text-lead-500">Personal Maquila:</label>
                                <input type="text" class="form-control rounded Selector @error('Personal_Maquila') is-invalid @enderror" wire:model.defer="Personal_Maquila" name="Personal_Maquila" id="Personal_Maquila">
                                    @error('Personal_Maquila')
                                        <small id="Personal_MaquilahelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                             @else

                            <div class="col-sm-12 col-md-4 pb-3">
                                <div class="pt-4">
                                <label for="almacen" class="form-label"></label>
                                    <button class="btn btn-success" wire:click='Guardar_Infor'> Empezar </button>
                                </div>
                            </div>
                         @endif

                        </div>

                        <fieldset class="border border-2 rounded-2">
                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Puntos a Evaluar</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Puntos a Evaluar</legend>
                                <div class="col-sm-12 col-md-12 pb-0 d-flex justify-content-end">
                                    <div class="pt-0">
                                    <label for="almacen" class="form-label"></label>
                                        <button class="btn btn-success" wire:click.prevent='SeleccionarValor'> Cumple </button>
                                    </div>
                                    </div>
                                <div class="row pt-4">
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">

                                <label for="" class="form-label text-dark">1. Uniforme completo y limpio.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('muc') is-invalid @enderror" wire:model="muc" name="muc" id="muc">
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No Cumple</option>
                                        <option value="0">No aplica</option>
                                         @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('muc1') is-invalid @enderror" wire:model.defer="muc1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('muc2') is-invalid @enderror" wire:model.defer="muc2" placeholder="Detalle de acciones tomadas">
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
                               {{-- </div>

                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">2. Cabello recogido y/o amarrado.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mbl') is-invalid @enderror" wire:model.defer="mbl" name="mbl" id="mbl" required>
                                        <option value="null">Seleccionar una opción</option>
                                        @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mbl1') is-invalid @enderror" wire:model.defer="mbl1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mbl2') is-invalid @enderror" wire:model.defer="mbl2" placeholder="Detalle de acciones tomadas">
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
                               {{-- </div>

                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">3. Uso correcto de cofia.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mcl') is-invalid @enderror" wire:model.defer="mcl" name="mcl" id="mcl" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mcl1') is-invalid @enderror" wire:model.defer="mcl1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mcl2') is-invalid @enderror" wire:model.defer="mcl2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2" x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="cl3">
                                       </div>
                                        </div> --}}
                               {{-- </div>

                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">4. Uñas cortas, limpias y sin esmalte.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mna') is-invalid @enderror" wire:model.defer="mna" name="mna" id="mna" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mna1') is-invalid @enderror" wire:model.defer="mna1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mna2') is-invalid @enderror" wire:model.defer="mna2" placeholder="Detalle de acciones tomadas">
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
                                <label for="almacen" class="form-label text-dark">5. Botas limpias.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mcp') is-invalid @enderror" wire:model.defer="mcp" name="mcp" id="mcp" required>
                                        <option value="null">Seleccionar una opción</option>
                                        @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mcp1') is-invalid @enderror" wire:model.defer="mcp1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mcp2') is-invalid @enderror" wire:model.defer="mcp2" placeholder="Detalle de acciones tomadas">
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
                                <label for="almacen" class="form-label text-dark">6. Rosotro sin maquillaje.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mul') is-invalid @enderror" wire:model.defer="mul" name="mul" id="mul" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mul1') is-invalid @enderror" wire:model.defer="mul1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mul2') is-invalid @enderror" wire:model.defer="mul2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div>

                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">7. No usa perfume.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mnp') is-invalid @enderror" wire:model.defer="mnp" name="mnp" id="mnp" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mnp1') is-invalid @enderror" wire:model.defer="mnp1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mnp2') is-invalid @enderror" wire:model.defer="mnp2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div>


                               <div x-data="{
                                textselect: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">8. Manos limpias y sin heridas.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mml') is-invalid @enderror" wire:model.defer="mml" name="mml" id="mml" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mml1') is-invalid @enderror" wire:model.defer="mml1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mml2') is-invalid @enderror" wire:model.defer="mml2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div>

                               <div x-data="{
                                mnaa: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">9. No usa accesorios (aretes, cadenas, anillo, etc).</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mnaa') is-invalid @enderror" wire:model.defer="mnaa" name="mnaa" id="mnaa" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mnaa1') is-invalid @enderror" wire:model.defer="mnaa1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mnaa2') is-invalid @enderror" wire:model.defer="mnaa2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div>

                               <div x-data="{
                                mub: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">10. Uniforme en buen estado.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mub') is-invalid @enderror" wire:model.defer="mub" name="mub" id="mub" required>
                                        <option value="null">Seleccionar una opción</option>
                                        @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mub1') is-invalid @enderror" wire:model.defer="mub1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mub2') is-invalid @enderror" wire:model.defer="mub2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div>

                               <div x-data="{
                                mcb: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">11. Casco/cofia en buen estado.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mcb') is-invalid @enderror" wire:model.defer="mcb" name="mcb" id="mcb" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mcb1') is-invalid @enderror" wire:model.defer="mcb1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mcb2') is-invalid @enderror" wire:model.defer="mcb2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div> --}}


                               {{-- <div x-data="{
                                mbe: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">12. Botas en buen estado.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mbe') is-invalid @enderror" wire:model.defer="mbe" name="mbe" id="mbe" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mbe1') is-invalid @enderror" wire:model.defer="mbe1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mbe2') is-invalid @enderror" wire:model.defer="mbe2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    {{-- <div class="col-sm-12 col-md-2"  x-show="textselect == 1 || textselect == 0">
                                        <div class="mb-3">
                                            <input type="date" class="form-control rounded" wire:model.defer="ul3">
                                       </div>
                                        </div> --}}

                               {{-- </div> --}}

                               {{-- <div x-data="{
                                mhg: 'null'
                                }"> --}}
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                <label for="almacen" class="form-label text-dark">13. Hace uso de guantes cuando corresponda.</label>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <select class="form-control @error('mhg') is-invalid @enderror" wire:model.defer="mhg" name="mhg" id="mhg" required>
                                        <option value="null">Seleccionar una opción</option>
                                         @if (!is_null($this->Infor_ph))
                                        <option value="2">Cumple</option>
                                        <option value="1">No cumple</option>
                                        <option value="0">No aplica</option>
                                        @else

                                        @endif
                                    </select>
                            </div>
                               </div>

                               <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control rounded @error('mhg1') is-invalid @enderror" wire:model.defer="mhg1" placeholder='Detalle de incumplimientos'>
                               </div>
                                </div>

                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <input type="text" class="form-control rounded @error('mhg2') is-invalid @enderror" wire:model.defer="mhg2" placeholder="Detalle de acciones tomadas">
                                   </div>
                                    </div>

                                    <div class="col-sm-12 pb-2">
                                        <label class="form-label text-orange-500">Actividad que está realizando*:</label>
                                        <textarea name="" wire:model='Observa' id="" class="form-control"></textarea>
                                    </div>

                            </fieldset>
                            <div class="pt-4 text-center">
                                 <button class="btn btn-primary" wire:click='GuardarMaquila'>Guardar</button>

                                 @if (!is_null($this->Practicas_maquilas))
                                 <button class="btn btn-danger" wire:click='Enviar'wire:loading.attr='disabled' wire:target='Enviar' class="disabled:opacity-60">Enviar</button>
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
                </div>
            </div>
        </div>
