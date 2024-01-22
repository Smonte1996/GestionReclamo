<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Checklist Pasillos</h3>
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
                            {{-- <h2>Listado de Notificaciones Pendientes hola</h2> --}}
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            </div>

                            <table id="reclamos"
                                class="text-green-500 table align-middle table-hover dt-responsive" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th data-priority="1">Evaluador</th>
                                        <th>Almacén</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Pasillos_vista as $Pasillo_V)
                                    <tr>
                                     <td>
                                        {{$Pasillo_V->id}}
                                     </td>
                                     <td>
                                        {{$Pasillo_V->evaluador}}
                                     </td>
                                     <td>
                                        {{$Pasillo_V->almacen}}
                                     </td>
                                     <td>
                                        {{$Pasillo_V->fecha}}
                                     </td>
                                     <td>
                                        <a href="{{route('adm.Checklist.pdf', encrypt($Pasillo_V->id))}}" rel="noreferrer noopener" target="_blank"  class="border btn btn-orange-500 text-white"
                                            >
                                            <i class="fa-solid fa-file-pdf"></i>
                                        </a>
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
