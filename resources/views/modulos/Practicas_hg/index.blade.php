<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Practicas de Higienes</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
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
                            <h2>Listado de Practicas de Higienes</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            </div>

                            <table id="reclamos"
                                class="text-green-500 table align-middle table-hover dt-responsive" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Solicitud</th>
                                        <th>Responsable</th>
                                        <th data-priority="1">Evaluador</th>
                                        <th >Almacen</th>
                                        <th>Fecha</th>
                                        <th data-priority="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $Higienes as $Higiene )
                                    <tr>
                                     <td>
                                         {{$Higiene->id}}
                                     </td>
                                     <td>
                                        {{$Higiene->solicitud}}
                                     </td>
                                     
                                     <td class="text-uppercase">
                                        @foreach ($Higiene->PersonalRansa as $ransa )
                                        @isset($ransa->infor_practicahg_id)
                                        {{$ransa->Supervisor->name}}
                                        @endisset
                                        @endforeach
                                        @foreach ($Higiene->NombreProveedor as $Proveedores)
                                        @isset($Proveedores->infor_practicahg_id)
                                            {{$Proveedores->proveedor}}
                                        @endisset
                                        @endforeach
                                        @isset($Higiene->Proveedor)
                                        {{$Higiene->Proveedor}}
                                        @endisset
                                     </td>
                                     
                                     <td>
                                         {{$Higiene->evaluador}}
                                     </td>
                                     <td>
                                        {{$Higiene->almacen}}
                                     </td>
                                     <td class="text-uppercase">
                                         {{$Higiene->fecha}}
                                     </td>
                                     <td>
                                        @switch($Higiene->solicitud)
                                            @case('Proveedor')
                                            <div class="btn-group btn-group-md " role="group" aria-label="">
                                                <a href="{{route('adm.pdf.Proveedor', encrypt($Higiene->id))}}" class="btn bg-orange-500 text-white border" target="_blank" >
                                                    <i class="fa-solid fa-file-pdf"></i>
                                                </a>
                                    
                                             @if ($Higiene->Estatus_tarea == 1)
                                             <a href="{{route('adm.p.h&g.edit', $Higiene->id)}}" class="btn btn-orange-500 text-white border" target="_blank" >
                                                <i class="fa-regular fa-pen-to-square"></i>
                                                Tarea
                                             </a>
                                               @endif
                                                  @if ($Higiene->Estatus_tarea == 2)   
                                                     <span class="btn bg-green-500 p-1 text-white border">Tarea cerrada</span>
                                                    @else

                                                   @endif
                                            </div>
                                                @break

                                                @case('Maquila')
                                                <div class="btn-group btn-group-md " role="group" aria-label="">
                                                    <a href="{{route('adm.Pdf.maquila', encrypt($Higiene->id))}}" class="btn bg-green-500 text-white border" target="_blank" >
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                    </a>
                                               
                                                    @if ($Higiene->Estatus_tarea == 1)
                                                    <a href="{{route('adm.Tarea.Maquila', encrypt($Higiene->id))}}" class="btn btn-orange-500 text-white border" target="_blank" >
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                        Tarea
                                                    </a>
                                                  @endif
                                                    @if ($Higiene->Estatus_tarea == 2)
    
                                                    <span class="btn bg-green-500 p-1 text-white border">Tarea cerrada</span>
                                                
                                                    @else

                                                    
                                                  @endif
                                                
                                                </div>
                                                @break

                                            @default
                                            <div class="btn-group btn-group-md " role="group" aria-label="">
                                                <a href="{{route('adm.pdf.hgs', encrypt($Higiene->id))}}" class="btn bg-lead-500 text-white border" target="_blank" >
                                                    <i class="fa-solid fa-file-pdf"></i>
                                                </a>

                                               @if ($Higiene->Estatus_tarea == 1)
                                               <a href="{{route('adm.Tarea.ransa', $Higiene->id)}}" class="btn btn-orange-500 text-white border" target="_blank" >
                                                <i class="fa-regular fa-pen-to-square"></i>
                                                Tarea
                                            </a>
                                               @endif
                                             @if ($Higiene->Estatus_tarea == 2)
                                                 
                                                  <span class="btn bg-green-500 p-1 text-white border">Tarea cerrada</span>
                                            @else

                                              @endif
                                               
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
</x-app-layout>
