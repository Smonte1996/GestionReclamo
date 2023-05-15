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
                                    {{-- @if ($notification_service->dissatisfaction_service->notification_type == 'NO CONFORMIDAD')
                                        <x-jet-button type="button" id=""><i
                                                class="fa fa-solid fa-upload"></i>
                                            Análisis
                                        </x-jet-button>
                                    @endif --}}
                                    <li>
                                        <!-- <input type="file" class="btn btn-success btn-sm btn-file form-control  @error('archivo') is-invalid @enderror" accept=".xlsx, .xls" wire:model='archivo'>
                                        @error('archivo')
                                        <small id="archivohelpId"
                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                        @enderror -->
                                    </li>
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
                                            <div class="text-lead-500 fs-6">
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
                                    <div class="col-sm-12 col-md-3">
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
                                                class="form-label text-lead-900">Sede</label>
                                            <div class="text-lead-500 fs-6">
                                                 {{$solicitude->sede->name}} 
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
                                    <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Argumentar</legend>
                                        <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Argumentar</legend>                                        
                                    <div class="ms-2">
                                        
                                          <div class="card text-center">
                                            <table id="" class="table table-striped dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        Argumentacion
                                                    </th>
                                                    <th>
                                                        Evidencia
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                <tr>
                                                <td>
                                                    <div class="form-floating">
                                                        <textarea class="form-control @error('argumento') is-invalid @enderror" wire:model.lazy='argumento' cols="30" placeholder="ARGUMENTO" id="floatingTextarea"></textarea>
                                                        <label for="floatingTextarea">Argumento</label>
                                                         @error('argumento')
                                                        <small id="argumentohelpId"
                                                            class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                                        @enderror
                                                      </div>
                                                </td>
                                                <td>
                                                    <input type="file" class="btn btn-sm btn-warning form-control-sm" wire:model='imagen' accept="image/*" multiple>
                                                    <div>
                                                        @if ($imagen)
                                                        Preview Imagen:
                                                        @foreach ($imagen as $images )
                                                        <img src="{{ $images->temporaryUrl() }}" width="80px" height="80px">    
                                                        @endforeach
                                                       @endif
                                                    </div>
                                                </td>
                                            </tr>
                                          
                                            </tbody>
                                            </table>
                                        </div>
                                <div class="text-center">
                                    <x-jet-button wire:click.prevent='Registarargumento' wire:loading.attr='disabled' wire:target='Registarargumento' class="disabled:opacity-60" class="mt-4">Notificar
                                    </x-jet-button>
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
                    <div class="overflow-scroll d-block">
                        {{-- @foreach ($notification_service->attached_files as $files)
                            <img class="rounded img-thumbnail" width="250" src="{{ asset($files->path) }}" alt="">
                        @endforeach --}}
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

