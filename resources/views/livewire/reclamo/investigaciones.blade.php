<div>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Gestion de Reclamos</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
                {{-- @csrf
                @method('PUT') --}}
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <x-jet-button type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fa fa-solid fa-eye"></i> Evidencia
                                        </x-jet-button>
                                    </li>
                                    {{-- <li> 
                                        <input type="file" class="btn btn-success btn-sm btn-file form-control @error('archivo') is-invalid @enderror" accept=".xlsx, .xls" wire:model='archivo'>
                                        @error('archivo')
                                        <small id="archivohelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror
                                    </li> --}}
                                    
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div id="previewsimg">
                            </div>
                            <div class="x_content">
                             <fieldset class="border border-2 mb-3">
                             <legend class="rounded w-50 d-none d-sm-block float-none bg-green-500 text-white ps-5 ms-4">Información general</legend>
                             <legend class="rounded float-none d-sm-none bg-green-500 text-white fs-6 p-1">Información general</legend>
                            <div class="row m-0">
                                        <div class="col-sm-12 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">N° de ticket
                                                </label>
                                                <div class="text-lead-500 fw-bold fs-6">
                                                    {{$solicitude->clasificacion->codigo_generado}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Causal General</label>
                                                <div class="text-lead-500 fs-6">
                                                    {{$solicitude->clasificacion->causal_general->name}} 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Tipo</label>
                                                <div class="text-lead-500 fw-bold fs-6">
                                                    {{$solicitude->tipo_reclamo->name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Cliente</label>
                                                <div class="text-lead-500 fw-bold fs-6">
                                                    {{$solicitude->cliente}}
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Detalle Causal</label>
                                                <div class="text-lead-500 fs-6">
                                                    {{$solicitude->clasificacion->detalle_causal->name}} 
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Sede</label>
                                                <div class="text-lead-500 fs-6">
                                                    {{$solicitude->sede->name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Servicio Contratado</label>
                                                <div class="text-lead-500 fs-6">
                                                    {{$solicitude->servicio_ransa->name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Sub Servicio</label>
                                                <div class="text-lead-500 fs-6">
                                                    {{$solicitude->adicional->name}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Descripcion</label>
                                                <div class="text-lead-500 fs-6">
                                                    {{$solicitude->Descripcion}}
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                             </fieldset>
                                <fieldset class="border border-2">
                                    <legend class="rounded w-50 d-none d-sm-block float-none bg-green-500 text-white ps-5 ms-4">Tratamiento del reclamo</legend>
                                        <legend class="rounded float-none d-sm-none bg-green-500 text-white fs-6 p-1">Tratamiento del reclamo</legend>                                        
                                   
                                        <div class="ms-2">
                                            <div class="row mb-3">
                                                <div class="col-sm-12">
                                                  <input type="text" class="form-control @error('correccion') is-invalid @enderror" wire:model.lazy='correccion' id="correccion" placeholder="Acciones inmediata (Corrección)">
                                                    @error('correccion')
                                                    <small id="correccionhelpId"
                                                     class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                     @enderror
                                                 </div>
                                            </div>
                                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Análisis causa - Metodologia Ishikawa</legend>
                                             <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Análisis causa - Metodologia Ishikawa</legend>
                                             <div class="card text-center mb-3">
                                                <table class="table table-striped table-responsive">
                                                  <thead>
                                                      <tr>
                                                          <th>
                                                              Categoria
                                                          </th>
                                                          <th>
                                                              Causa
                                                          </th>
                                                          <th>
                                                              Acción
                                                          </th>
                                                      </tr>
                                                      <tbody>
                                                          @foreach ( $campo as $inicio => $camp )
  
                                                          <tr>
                                                              <td>
                                                                  <select class="form-control" id="" wire:model="campo.{{$inicio}}.categoria">
                                                                      <option value="">Seleccionar Categoria</option>
                                                                      <option value="Entorno"> Entorno </option>
                                                                      <option value="Método"> Método </option>
                                                                      <option value="Persona">Persona</option>
                                                                      <option value="Equipos">Equipos</option>
                                                                      <option value="Materiales">Materiales</option>
                                                                  </select>
                                                              </td>
                                                              <td>
                                                                  <input type="text" class="form-control" wire:model="campo.{{$inicio}}.causa">
                                                              </td>
                                                              <td>
                                                                  <button class="btn btn-md btn-danger" wire:click.prevent="Deshasercampo({{$inicio}})"><i class="fa-solid fa-trash"></i></button>
                                                              </td>
                                                          </tr>                                                      
                                                          @endforeach
                                                      </tbody>
                                                  </thead>
                                                </table>
                                                <div class="row">
                                                  <div class="col-md-2">
                                              <button class="btn btn-sm"
                                              wire:click.prevent='Añadircampos'><i class="fa-solid fa-plus" style="color: #27b050;"></i> Agregar campos</button>
                                          </div>
                                              </div>
                                              </div>
                                              <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Análisis causa - efecto: 5 porqués</legend>
                                              <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Análisis causa - efecto: 5 porqués</legend>
                                             <div class="card text-center">
                                                 <table class="table table-striped table-responsive">
                                                     <thead>
                                                         <tr>
                                                             <th>
                                                                Por que 1
                                                             </th>
                                                             <th>
                                                                 Por que 2
                                                             </th>
                                                             <th>
                                                                 Por que 3
                                                             </th>
                                                             <th>
                                                                 Por que 4
                                                             </th>
                                                             <th>
                                                                 Por que 5
                                                             </th>
                                                             <th>
                                                                 Accion
                                                             </th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         @foreach ( $campos as $indexs => $campo )
                                                           <tr>
                                                             <td>
                                                                 <textarea wire:model="campos.{{$indexs}}.porqueone" class="form-control" name="" id=""></textarea>
                                                             </td>
                                                             <td>
                                                                 <textarea wire:model="campos.{{$indexs}}.porquetwo" class="form-control" name="" id=""></textarea>
                                                             </td>
                                                             <td>
                                                                 <textarea wire:model="campos.{{$indexs}}.porquethree" class="form-control" name="" id=""></textarea>
                                                             </td>
                                                             <td>
                                                                 <textarea wire:model="campos.{{$indexs}}.porquefour" class="form-control" name="" id=""></textarea>
                                                             </td>
                                                             <td>
                                                                 <textarea wire:model="campos.{{$indexs}}.porquefive" id="" cols="20" class="form-control"></textarea>
                                                             </td>
                                                             <td>
                                                                 <button class="btn btn-md btn-danger" wire:click.prevent="QuitarCampos({{$indexs}})"><i class="fa-solid fa-trash"></i></button>
                                                             </td>
                                                         </tr>
                                                         @endforeach
                                                     </tbody>
                                                 </table>
                                                 <div class="row">
                                                     <div class="col-md-2">
                                                 <button class="btn btn-sm"
                                                 wire:click.prevent='agregarcampos'><i class="fa-solid fa-plus" style="color: #27b050;"></i> Agregar campos</button>
                                             </div>
                                                 </div>
                                             </div>
                                            <div class="row mb-3 mt-3">
                                                <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Causa fundamental</legend>
                                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Causa fundamental</legend>
                                                <div class="col-sm-12">
                                                <input type="text" class="form-control @error('causa_raiz') is-invalid @enderror" wire:model.lazy='causa_raiz' id="causa_raiz" placeholder="Causa Raiz" aria-label="Causca Raiz">
                                                @error('causa_raiz')
                                                 <small id="causa_raizhelpId"
                                                     class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                 @enderror
                                                </div>
                                            </div>
                                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Planes de acciones</legend>
                                            <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Planes de acciones</legend>
                                            <div class="card text-center">
                                                <table id="" class="table table-striped dt-responsive nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            Acción
                                                        </th>
                                                        <th>
                                                            Responsables
                                                        </th>
                                                        <th>
                                                            Fecha Programada 
                                                        </th>
                                                        <th data-priority="2">
                                                            Acciones
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ( $inputs as $index => $input )     
                                                    <tr>
                                                    <td>
                                                        <input type="text" class="form-control" id="acciones" 
                                                        wire:model="inputs.{{$index}}.acciones" name="acciones" placeholder="Acciones" aria-label="Acciones">
                                                       
                                                    </td>
                                                    <td>
                                                        <select class="form-control " name="responsable" id="responsable"  wire:model="inputs.{{$index}}.responsable"  placeholder="Responsable" > 
                                                        <option value="">Seleccionar opcione</option>
                                                          @foreach ($supervisores as $supervisore )
                                                        <option value="{{$supervisore->id}}"> {{$supervisore->name}} </option>
                                                          @endforeach
                                                        </select>   
                                                            
                                                    </td>
                                                    <td>
                                                        <input type="date" class="form-control" name="fecha_programada" id="fecha_programada"  wire:model="inputs.{{$index}}.fecha_programada" placeholder="Feha Programada" aria-label="Feha Programada">
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-danger" wire:click.prevent="removeField({{$index}})">Eliminar</button>
                                                    </td>
                                                </tr>
                                                @endforeach 
                                                </tbody>
                                                </table>
                                                <div class="row">
                                                    <div class="col-md-2">
                                                <button class="btn btn-sm"
                                                wire:click.prevent='addField'><i class="fa-solid fa-plus" style="color: #27b050;"></i> Agregar campos</button>
                                            </div>
                                                </div>
                                        </div>
                                        
                                        <div class="mt-2">
                                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Eficacia</legend>
                                            <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Eficacia</legend>
                                           </div>

                                            <div class="row g-3 mb-3">
                                                <div class="col-sm">
                                                <input type="text" class="form-control @error('evaluacion') is-invalid @enderror" id="evaluacion" wire:model.lazy='evaluacion' placeholder="Evaluacion" >
                                                @error('evaluacion')
                                                <small id="evaluacionhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                                </div>
                                                <div class="col-sm">
                                                <select class="form-control @error('Responsable') is-invalid @enderror"  wire:model.defer='Responsable' id="Responsable" aria-label="Responsable">
                                                    <option value="">Seleccionar opcione</option>
                                                    @foreach ($users as $user )
                                                            <option value="{{$user->id}}"> {{$user->name}} </option>
                                                    @endforeach
                                                </select>
                                                @error('Responsable')
                                                <small id="ResponsablehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                                </div>
                                                <div class="col-sm">
                                                <input type="date" class="form-control @error('fechaprog') is-invalid @enderror" wire:model='fechaprog' id="fechaprog" placeholder="Feha Programada" >
                                                @error('fechaprog')
                                                <small id="fechaproghelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                @enderror
                                                </div>
                                            </div>
                                            </div>
                                </fieldset>
                                {{-- <div class="col-12">
                                    <label class="form-label text-orange-500">Observaciones:</label>
                                    <textarea class="form-control" wire:model='observacion'></textarea>
                                </div> --}}
                                <div class="text-center">
                                    <x-jet-button id="confirmaction" wire:click.prevent='ResgistroAnalisis'  wire:loading.attr='disabled' wire:target='ResgistroAnalisis' class="disabled:opacity-60" class="mt-4">Enviar
                                    </x-jet-button>
                                </div>
                                <a class=" btn btn-success mt-4 btn-sm" href="{{route('adm.Investigacion.noProcede', $clasificacion)}}" class="mt-4">No Procede
                                </a>

                            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    {{-- Modal para Visualizar las imagenes --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="overflow-scroll d-block">
                        @isset($solicitude->imagen)
                            <img src="{{asset('storage/Reclamos/'.trim($solicitude->imagen))}}" rel="noreferrer noopener" class="card-img-top">
                        @endisset
                    </div>

                </div>
               
            </div>
        </div>
    </div>
</div>

