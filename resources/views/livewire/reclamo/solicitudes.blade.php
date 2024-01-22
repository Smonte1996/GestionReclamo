{{-- @push('styles')
<link rel="stylesheet" href="{{ asset('css/rqr.css') }}">
@endpush --}}
<div>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Listado de Reclamos</h3>
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
            {{-- <div id="cuadroItem" class="cuadroItem">
                <div class="x_panel">
                    <div class="x_content">
                        <div id="ItemProceso" class="view-horizontal">
                            <ul class="view-steps anchor">
                                <li>
                                    <a class="selview-horizontalectedd" href="#">
                                        <span class="itemno">1</span>
                                        <span>Registro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="itemno">2</span>
                                        <span class="">Clasificación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="itemno">3</span>
                                        <span>Investigación</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="itemno">4</span>
                                        <span>Seguimiento</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="itemno">5</span>
                                        <span>Cierre</span>
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>
            </div> --}}
         <div class="row" wire:ignore>
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="mb-2">
                            <div class="btn-group btn-group-sm" role="group" aria-label="">
                            <a href="https://app.powerbi.com/view?r=eyJrIjoiYTMzZGYwNjAtMTljOS00OTRkLWIwOWItOTg1NDQ3NTNlYTliIiwidCI6IjMyZTAxNzYzLTQxZTItNDA5My1hZWQ2LTVhZjFmOWMzNzk2NSJ9" class="btn btn-sm btn-green-400 text-white" target="_blank">Indicador Power BI</a>
                           
                           <button class="btn btn-sm bg-green-500 text-white" wire:click.prevent='DescargarReclamo'>
                            Descargar Excel
                         </button>
                          </div>
                        <div class="clearfix"></div>
                </div>

            <table id="reclamos" class="text-green-500 table table-striped" style="width:100%">
                {{-- <div class="mb-2 col-md-3" style="width: 200px">
                    <select name="" wire:model="estado" class="form-control">
                       <option value="">Seleccionar opción</option>
                      <option value="1">Clasificación</option>
                      <option value="2">Investigación</option>
                      <option value="3">En proceso</option>
                      <option value="4">Cerrado</option>
                      <option value="5">No procede</option>
                    </select>
                </div> --}}
                <thead>
                    <tr>
                        <th>ID</th>
                        <th data-priority="1">Codigo</th>
                        <th >Nombre</th>
                        <th>Correo</th>
                        <th data-priority="1">Celular</th>
                        <th data-priority="1">Cliente</th>
                        <th data-priority="1">sede</th>
                        <th data-priority="1">Tipo Notificación</th>
                        <th data-priority="2">Servicio</th>
                        <th>F. Registro</th>
                        <th>Descripcion</th>
                        <th data-priority="2"> Estado </th>
                        <th data-priority="2">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitudes as $solicitud)
                    <tr>
                        <td>{{$solicitud->id}}</td>
                        <td>{{$solicitud->codigo_generado}}</td>
                        <td>{{$solicitud->nombre}}</td>
                        <td>{{$solicitud->correo}}</td>
                        <td>{{$solicitud->celular}}</td>
                        <td>{{$solicitud->cliente}}</td>
                        <td>{{$solicitud->sede->name}}</td>
                        <td>{{$solicitud->tipo_reclamo->name}}</td>
                        <td>{{$solicitud->servicio_ransa->name}}</td>
                        <td>{{$solicitud->fecha_registro}}</td>
                        <td>{{$solicitud->Descripcion}}</td>
                        <td>

                            @switch($solicitud->estado)

                            @case(2)
                            @if (today()->diffInDays($solicitud->clasificacion->created_at) >= 5)
                            <label class="bg-orange-500 p-1 btn-group btn-group-sm  rounded text-white text-center" style="font-size:11px;">Investigacion con {{today()->diffInDays($solicitud->clasificacion->created_at)}} dias de atraso</label>
                            @else
                            <label class="bg-green-500 btn-group btn-group-sm p-1 rounded text-white text-center" style="font-size: 11px;">Investigación</label>
                            @endif
                            @break
                            @case(3)
                            @if (today() > $solicitud->investigacion->fecha_programada)
                            <label class="bg-orange-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Proceso con {{today()->diffInDays($solicitud->investigacion->fecha_programada)}} dias de atraso </label>
                            @else
                            <label class="bg-lead-500 btn-group btn-group-sm p-1 rounded text-white text-center" style="font-size:11px;">En proceso</label>
                            @endif
                            @break
                            @case(4)
                            <span class="bg-green-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Caso Resuelto</span>
                            @break
                            @case(5)
                            <div class="btn-group btn-group-sm">
                            <label class="bg-orange-500 p-1 rounded text-white text-center" style="font-size:11px;">Cerrado
                            @isset($solicitud->investigacion->argumento)
                            no procede
                            @endisset
                            @isset($solicitud->investigacion->correccion)
                            Corrección
                            @endisset
                           </label>
                            </div>
                            @break
                            @default
                            @if (today()->diffInDays($solicitud->created_at) >= 2)
                            <label class="bg-orange-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:11px;">Clasificacion con {{today()->diffInDays($solicitud->created_at)}} dias de atraso</label>
                            @else
                            <span class="bg-green-500 p-1 rounded text-white">Clasificación</span>
                            @endif
                            @endswitch
                        </td>
                        <td>
                            @switch($solicitud->estado)
                            @case(2)
                            <figure class="figure" title="{{$solicitud->clasificacion->users->name}}">
                            <label class="bg-lead-500 p-1 btn-group btn-group-sm rounded text-white text-center" style="font-size:12px;">Responsable Asignado</label>
                            </figure>
                            @break

                            @case(3)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">

                                <a href="{{route('adm.Reclamo.pdf', encrypt($solicitud->id))}}" target="_blank" rel="noreferrer noopener" class="border btn btn-orange-500 text-white"
                                    >
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                                <a href="{{ route('adm.Infor.reclamo', encrypt($solicitud->id)) }}" class="btn btn-orange-500 text-white border" >
                                    <i class="fa fa-info"></i>
                                </a>
                            </div>
                            @break

                            @case(4)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">

                                <a href="{{route('adm.Reclamo.pdf', encrypt($solicitud->id))}}" target="_blank" rel="noreferrer noopener" class="border btn btn-orange-500 text-white"
                                    >
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                                <a href="{{ route('adm.Infor.reclamo', encrypt($solicitud->id)) }}" class="btn btn-orange-500 text-white border" >
                                    <i class="fa fa-info"></i>
                                </a>
                            </div>
                            @break

                            @case(5)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">
                                <a href="{{route('adm.inf.no-procede', encrypt($solicitud->id))}}" class="btn btn-orange-500 text-white border" >
                                    <i class="fa fa-info"></i>
                                </a>
                            </div>
                            @break

                            @default
                            <div class="btn-group btn-group-sm " role="group" aria-label="">

                                <a href="{{ route('adm.Clasificacion', encrypt($solicitud->id)) }}" class="btn btn-orange-500 text-white border">
                                    <i class="fa fa-user"></i>
                                    Asignar
                                </a>
                            </div>
                            @endswitch

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
         </div>
    </div>
</div>
    </div>
</div>
</div>



