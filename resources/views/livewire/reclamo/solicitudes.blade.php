@push('styles')
<link rel="stylesheet" href="{{ asset('css/rqr.css') }}">
@endpush
<div>
    <div class="right_col" role="main">
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
 
            <div id="cuadroItem" class="cuadroItem">
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
            </div>
         <div class="row">
            <table id="reclamos" class="text-green-500 table table-striped dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th data-priority="1">Codigo</th>
                        <th >Nombre</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th data-priority="1">Cliente</th>
                        <th data-priority="1">sede</th>
                        <th>Tipo Notificación</th>
                        <th data-priority="1">Servicio</th>
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
                            <span class="bg-green-500 p-1 rounded text-white">Investigación</span>
                            @break
                            @case(3)
                            <span class="bg-lead-500 p-1 rounded text-white">En proceso</span>
                            @break
                            @case(4)
                            <span class="bg-green-500 p-1 rounded text-white">Caso Resuelto</span>
                            @break
                            @case(5)
                            <span class="bg-orange-500 p-1 rounded text-white">Cerrado</span>
                            @isset($solicitud->investigacion->argumento)
                            <span class="bg-orange-500 p-1 rounded text-white">No procede</span>
                            @endisset
                            @isset($solicitud->investigacion->correccion)
                            <span class="bg-orange-500 p-1 rounded text-white">Corrección</span>
                            @endisset
                            @break
                            @default
                            <span class="bg-green-500 p-1 rounded text-white">Clasificación</span>
                            @endswitch
                        </td>
                        <td>
                            @switch($solicitud->estado)
                            @case(2)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">
                                <span class="bg-lead-500 p-1 rounded text-white">Responsable Asignado</span>
                            </div>
                            @break

                            @case(3)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">
                               
                                <a href="{{route('adm.Reclamo.pdf', $solicitud->id)}}" target="_blank" rel="noreferrer noopener" class="border btn btn-orange-500 text-white"
                                    >
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                                <a href="{{ route('adm.Infor.reclamo', $solicitud->id) }}" class="btn btn-orange-500 text-white border" >
                                    <i class="fa fa-info"></i>
                                </a> 
                            </div>
                            @break

                            @case(4)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">
                              
                                <a href="{{route('adm.Reclamo.pdf', $solicitud->id)}}" target="_blank" rel="noreferrer noopener" class="border btn btn-orange-500 text-white"
                                    >
                                    <i class="fa-solid fa-file-pdf"></i>
                                </a>
                                <a href="{{ route('adm.Infor.reclamo', $solicitud->id) }}" class="btn btn-orange-500 text-white border" >
                                    <i class="fa fa-info"></i>
                                </a>
                            </div> 
                            @break
                             
                            @case(5)
                            <div class="btn-group btn-group-sm " role="group" aria-label="">
                                <a href="{{route('adm.inf.no-procede', $solicitud->id)}}" class="btn btn-orange-500 text-white border" >
                                    <i class="fa fa-info"></i>
                                </a>
                            </div>  
                            @break

                            @default
                            <div class="btn-group btn-group-sm " role="group" aria-label="">

                                <a href="{{ route('adm.Clasificacion', $solicitud->id) }}" class="btn btn-orange-500 text-white border">
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
 


