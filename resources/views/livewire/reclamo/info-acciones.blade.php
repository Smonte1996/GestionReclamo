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

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <x-jet-button type="button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa fa-solid fa-eye"></i> Evidencia Cliente
                                    </x-jet-button>
                                </li>
                                <li>
                                    <x-jet-button type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal1"><i class="fa fa-solid fa-eye"></i> Evidencia Acciones
                                </x-jet-button>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="">
                                <a href="{{ route('adm.reclamo') }}"
                                    class="btn btn-sm btn-orange-500">Regresar</a>
                            </div>
                                <fieldset class="border border-2 rounded mb-2 mt-3">
                                    <legend class="rounded w-50 d-none d-sm-block float-none bg-green-500 text-white ps-5 ms-4">Información general</legend>
                                    <legend class="rounded float-none d-sm-none bg-green-500 text-white fs-6 p-1">Información general</legend>
                                 <div class="row m-0 ">
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">N° de ticket
                                        </label>
                                        <div class="text-lead-500 fw-bold fs-6">
                                             {{$solicitude->codigo_generado}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Causal General</label>
                                        <div class="text-lead-500 fs-6">
                                             {{$solicitude->clasificacion->causal_general->name}} 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Tipo</label>
                                        <div class="text-lead-500 fw-bold fs-6">
                                              {{$solicitude->tipo_reclamo->name}} 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Sede</label>
                                        <div class="text-lead-500 fs-6">
                                              {{$solicitude->sede->name}} 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Cliente</label>
                                        <div class="text-lead-500 fw-bold fs-6">
                                             {{$solicitude->cliente}} 
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Detalle Causal</label>
                                        <div class="text-lead-500 fs-6">
                                            {{$solicitude->clasificacion->detalle_causal->name}} 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-3">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Titulo de caso</label>
                                        <div class="text-lead-500 fs-6">
                                              {{$solicitude->titulo}} 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Descripción</label>
                                        <div class="text-lead-500 fs-6">
                                              {{$solicitude->Descripcion}} 
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset class="border border-2 rounded">
                                <legend class="rounded w-50 d-none d-sm-block float-none bg-green-500 text-white ps-5 ms-4">Tratamiento del reclamo</legend>
                                <legend class="rounded float-none d-sm-none bg-green-500 text-white fs-6 p-1">Tratamiento del reclamo</legend>
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Responsable</label>
                                    <div class="text-lead-500 fs-6">
                                         {{$solicitude->clasificacion->users->name}} 
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Corrección</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->correccion}}
                                    </div>
                                </div>
                            </div> 
                            <fieldset class="border border-white">
                            <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Análisis causa - Metodologia Ishikawa</legend>
                              <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Análisis causa - Metodologia Ishikawa</legend>
                            
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Categoria</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                         @foreach ( $solicitude->ishikawa as $ishikaw )
                                        <li>{{$ishikaw->categoria}}</li>
                                        @endforeach 
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Causa</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                        @foreach ( $solicitude->ishikawa as $ishikaw )
                                        <li>{{$ishikaw->causa}}</li>
                                        @endforeach 
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <fieldset class="border border-white">
                                <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Análisis causa - efecto: 5 porqués</legend>
                                  <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Análisis causa - efecto: 5 porqués</legend>
                                
                            <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Por que 1</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                         @foreach ( $solicitude->Analisis as $Analisi )
                                        <li>{{$Analisi->porque1}}</li>
                                        @endforeach 
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Por que 2</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                         @foreach ( $solicitude->Analisis as $Analisi )
                                        <li>{{$Analisi->porque2}}</li>
                                        @endforeach 
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Por que 3</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                        @foreach ( $solicitude->Analisis as $Analisi )
                                        <li>{{$Analisi->porque3}}</li>
                                        @endforeach 
                                    </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Por que 4</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                         @foreach ( $solicitude->Analisis as $Analisi )
                                        <li>{{$Analisi->porque4}}</li>
                                        @endforeach 
                                    </ul>
                                    </div>
                                </div>
                            </div>
                                 <div class="col-sm-12 col-md-2">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-lead-900">Por que 5</label>
                                        <div class="text-lead-500 fs-6">
                                            <ul>
                                             @foreach ( $solicitude->Analisis as $Analisi )
                                            <li>{{$Analisi->porque5}}</li>
                                            @endforeach 
                                        </ul>
                                        </div>
                                    </div>
                            </div>
                        </fieldset>
                            <fieldset class="border border-white">
                                <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Causa fundamental</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Causa fundamental</legend>
                            <div class="col-sm-12 col-md-12">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Causa Raíz</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->causa_raiz}}
                                    </div>
                                </div>
                            </div> 
                        </fieldset>
                            <fieldset class="border border-white">
                                <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Planes de acciones</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Planes de acciones</legend>
                            
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Plan de acción</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                          @foreach ($solicitude->acciones as $accion) 
                                        <li>{{$accion->name}}</li>
                                        @endforeach  
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Responsables</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                          @foreach ($solicitude->acciones as $accion) 
                                        <li>{{$accion->userse->name}}</li>
                                        @endforeach  
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-12 col-md-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Fecha Programada</label>
                                    <div class="text-lead-500 fs-6">
                                        <ul>
                                          @foreach ($solicitude->acciones as $accion) 
                                        <li>{{$accion->fecha_programacion->format('d/m/y')}}</li>
                                        @endforeach  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <fieldset class="border border-white">
                                <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Eficacia</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Eficacia</legend>
                           
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Evaluación de Eficacia</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->evaluacion_eficacia}}
                                    </div>
                                </div>
                            </div> 
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Supervisor Responsable</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->user->name}}
                                    </div>
                                </div>
                            </div>  
                            <div class="col-sm-12 col-md-4">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Fecha Propuesta</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->fecha_programada->format('d/m/y')}}
                                    </div>
                                </div>
                            </div>
                        </fieldset> 
                            @isset($solicitude->investigacion->cumplimiento)
                            <fieldset class="border border-white">
                                <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Resultado de Eficacia</legend>
                                <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Resultado de Eficacia</legend>
                            </fieldset>
                            <div class="col-sm-12 col-md-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Evidencia de evaluación de Eficacia</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->observacion}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">Fecha de Cierre</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->date_check}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1"
                                        class="form-label text-lead-900">¿Es Eficaz?</label>
                                    <div class="text-lead-500 fs-6">
                                        {{$solicitude->investigacion->cumplimiento}}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <div class="col-sm-12 col-md-12">
                            <div class="text-center mb-3">
                                <x-jet-button class="mt-4" wire:click="$emit('MostarAlerta', {{$solicitude->id}})">Reapertura
                                </x-jet-button>
                            </div>
                        </div>
                        @endisset 
                         @isset($solicitude->encuesta->p1) 
                         <fieldset class="border border-2 rounded"> 
                            <legend class="rounded w-50 d-none d-sm-block float-none bg-green-500 text-white ps-5 ms-4">Calificación Cliente</legend>
                            <legend class="rounded float-none d-sm-none bg-green-500 text-white fs-6 p-1">Calificación Cliente</legend>
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                 <label for="exampleFormControlInput1"
                                    class="form-label text-lead-900 fs-6">1. ¿En términos generales qué tan satisfecho te encuentras con el proceso de tu reclamo?</label> 
                                <div class="text-lead-500 ">
                                    {{$solicitude->encuesta->p1}}
                                    <br>
                                    <label for="exampleFormControlInput1"
                                    class="form-label text-lead-900">Observacion:</label>
                                      {{$solicitude->encuesta->ob1}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                 <label for="exampleFormControlInput1"
                                    class="form-label text-lead-900 fs-6">2. En términos generales, califique del 1 al 10 la gestión de su reclamo en cuanto a:<br>
                                    2.1. Atención (calificar del 1 al 10)</label> 
                                <div class="text-lead-500">
                                    {{$solicitude->encuesta->p2}}
                                    <br>
                                    <label for="exampleFormControlInput1"
                                    class="form-label text-lead-500">Observacion:</label>
                                      {{$solicitude->encuesta->o2}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                 <label for="exampleFormControlInput1"
                                    class="form-label text-lead-900 fs-6">2.2. Rapidez (calificar del 1 al 10)</label> 
                                <div class="text-lead-500">
                                    {{$solicitude->encuesta->p3}}
                                    <br>
                                    <label for="exampleFormControlInput1"
                                    class="form-label text-lead-500">Observacion:</label>
                                      {{$solicitude->encuesta->ob3}}
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                 <label for="exampleFormControlInput1"
                                    class="form-label text-lead-900 fs-6">2.3. Solución final (calificar del 1 al 10)</label> 
                                <div class="text-lead-500 ">
                                    {{$solicitude->encuesta->p4}}
                                    <br> 
                                    <label for="exampleFormControlInput1"
                                    class="form-label text-lead-500">Observacion:</label>
                                      {{$solicitude->encuesta->ob4}}
                                </div>
                            </div>
                        </div>
                    </fieldset>
                         @endisset 
                            </div>
                        </div>
                    </div>
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
                    <div class="overflow-scroll d-block card">
                        <div class="text-center">
                        @isset($solicitude->imagen)
                        <img src="{{asset('storage/Reclamos/'.trim($solicitude->imagen))}}" rel="noreferrer noopener" width="360" class="img-thumbnail modall img-fluid"> 
                        @endisset
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Modal para Visualizar las imagenes --}}
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="overflow-scroll d-block card">
                    <div class="row">   
                            @foreach ($solicitude->Evidencia as $solicitud )                        
                         <div class="col-md-4 col-sm-4 mb-3">          
                        <a href="{{asset('storage/Evidencia/'.trim($solicitud->name))}}" target="_blank" rel="noreferrer noopener"><img src="{{asset('storage/Evidencia/'.trim($solicitud->name))}}" rel="noreferrer noopener" width="250" class="img-thumbnail img-fluid"></a>  
                        </div>
                       @endforeach
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
Livewire.on('MostarAlerta', solicitudeid =>{   
        Swal.fire({
        title: 'Reapertura Reclamo?',
        text: "Esta segura/o que desea reapertura el caso!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, notificar!'
        }).then((result) => {
        if (result.isConfirmed) {
            livewire.emit('Reapertura', solicitudeid)
            Swal.fire(
            'Reaterturado!',
            'Se notifico al resonsable de la reapertura.',
            'success'
            )
        }
        })
    })
</script>
@endpush

