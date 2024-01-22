<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Checklist pasillo</h3>
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
                            <h2>Pasillos y responsables</h2>

                            <div class="clearfix"></div>
                        </div>
                         <div class="pt-2">
                            <a class="btn-green-500 btn text-white btn-sm" href="{{route('adm.check.pasillos.create')}}">Registrar</a>
                        </div>
                        <div class="x_content">
                            <table id="reclamos" class="table text-green-500 align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th data-priority="1">Zona Bodega</th>
                                        <th>Pasillos</th>
                                        <th>Coordinador</th>
                                        <th>Supervisores</th>
                                        <th>Responsables</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $Pasillos_R as $Pasillos_Rs )
                                    <tr>

                                         <td>
                                            {{$Pasillos_Rs->id}}
                                        </td>

                                        <td>
                                            {{$Pasillos_Rs->Bodega->name}}
                                        </td>

                                        <td>
                                             {{$Pasillos_Rs->name}}
                                        </td>

                                        <td>
                                            {{$Pasillos_Rs->coordinador}}
                                        </td>

                                        <td>
                                            {{$Pasillos_Rs->supervisor->name}}
                                        </td>

                                        <td>
                                            {{$Pasillos_Rs->responsables}}
                                        </td>

                                         <td>
                                            <div class="btn-group btn-group-sm " role="group" aria-label="">
                                            <a href="{{route('adm.check.pasillos.edit', encrypt($Pasillos_Rs->id))}}" class="btn btn-orange-500 text-white border" >
                                                <i class="fa-solid fa-pen"></i>
                                            </a>

                                            <a href="{{route('adm.ChecksPasillos.Eliminar', encrypt($Pasillos_Rs->id))}}" class="btn btn-sm btn-danger ms-n5" ><i class="fas fa-trash-alt"></i></a>
                                            </div>
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
