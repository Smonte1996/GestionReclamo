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
            <form 
            id="imgcorrection" >
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <ul class="nav navbar-right panel_toolbox">
                                    <li>
                                        <input type="file" class="btn btn-success btn-sm btn-file form-control" accept="image/*" wire:model='imagen' multiple>
                                        <div>
                                            @if ($imagen)
                                            Preview Imagen:
                                            @foreach ($imagen as $images )
                                            <img src="{{ $images->temporaryUrl() }}" width="80px" height="80px">    
                                            @endforeach
                                           @endif
                                        </div>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
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
                                               {{$solicitude->codigo_generado}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-900">Tipo</label>
                                            <div class="text-lead-500 fs-6">
                                                {{$solicitude->tipo_reclamo->name}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-900">Sede</label>
                                            <div class="text-lead-500 fw-bold fs-6">
                                               {{$solicitude->sede->name}}
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
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-900">Causal general</label>
                                            <div class="text-lead-500 fs-6">
                                               {{$solicitude->clasificacion->causal_general->name}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-900">Detalle causal</label>
                                            <div class="text-lead-500 fs-6">
                                               {{$solicitude->clasificacion->detalle_causal->name}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-900">Causa raiz</label>
                                            <div class="text-lead-500 fs-6">
                                               {{$solicitude->investigacion->causa_raiz}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-900">Correcion</label>
                                            <div class="text-lead-500 fs-6">
                                               {{$solicitude->investigacion->correccion}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                                <fieldset class="border border-2">
                                    <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Da check a
                                        las
                                        acciones cumplidas</legend>
                                        <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Da check a
                                            las
                                            acciones cumplidas</legend>                                        
                                    <div class="ms-4">
                                        <table class="table w-100 text-green-400">
                                            @foreach ($solicitude->acciones as $accion) 
                                                <tr>
                                                     <td class="">
                                                        {{$accion->name}}
                                                    </td> 
                                                    <td class="ps-5">
                                                        <div class="">
                                                        {{$accion->fecha_programacion->format('d/m/y')}}
                                                        </div>
                                                    </td>
                                                    <td class="ps-5">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="accion_check" wire:model.lazy='accion_check' 
                                                                class="form-check-input text-green-500">
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Evaluacion de eficacia</label>
                                                <div class="text-lead-500 fs-6">
                                                   {{$solicitude->investigacion->evaluacion_eficacia}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-lead-900">Fecha Programada</label>
                                                <div class="text-lead-500 fs-6">
                                                   {{$solicitude->investigacion->fecha_programada->format('d/m/y')}}
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div>
                                        <label for="exampleFormControlInput1"
                                        class="form-label text-lead-500">¿ El plan de acción es eficaz ?</label>
                                       </div>

                                        <div class="col-sm-12 col-md-1">
                                        <label for="exampleFormControlInput1"
                                             class="form-label text-lead-500">Si</label>
                                        <div class="form-check mb-3">
                                            <input type="radio" name="evaluacion_check" wire:model.prevent='evaluacion_check' 
                                                class="form-check-input text-green-500" value="SI">
                                        </div>
                                        </div>

                                        <div class="col-sm-12 col-md-1">
                                            <label for="exampleFormControlInput1"
                                                 class="form-label text-lead-500">No</label>
                                            <div class="form-checks mb-3">
                                                <input type="radio" name="evaluacion_check" wire:model.prevent='evaluacion_check' 
                                                    class="form-checks-input text-red-500" value="NO">
                                            </div>
                                            </div>
                                    </div>
                                   
                                </fieldset>
                                
                                <div class="col-12 ">
                                    <label class="form-label text-orange-500">Resultado Obtenido *:</label>
                                    <textarea class="form-control" wire:model.lazy='observacion'></textarea>
                                </div>
                                <!-- <div>
                                 @if ($errorMessage)
                                <div class="alert alert-danger">{{ $errorMessage }}</div>
                                 @endif 
                                </div> -->
                                <div class="text-center">
                                    <x-jet-button wire:click.prevent="confirmarchekcData" wire:loading.attr='disabled' wire:target='confirmarchekcData' class="disabled:opacity-60" class="mt-4">Confirmar Acciones
                                    </x-jet-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@push('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Livewire.on('show-sweetalert', function(data){
        Swal.fire({
            icon: data.type,
            title: data.title,
            text: data.message
        });
    });
</script>    
@endpush



