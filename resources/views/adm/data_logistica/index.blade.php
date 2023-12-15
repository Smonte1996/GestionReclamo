<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Listado de la Data Logistica</h3>
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
                            <h2>Data Logistica </h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-green-500 btn text-white btn-sm" href="{{route('adm.data_logisticas.create')}}">Registrar</a>

                        </div>
                        <div class="x_content">
                            <table id="reclamos" class="table text-green-500 align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th data-priority="1">Sku Quala</th>
                                        <th>Sku Unilever</th>
                                        <th>Cliente</th>
                                        <th data-priority="1">Descripción</th>
                                        <th data-priority="2">Ean 13</th>
                                        <th data-priority="2">Ean 14</th>
                                        <th>Ean 128</th>
                                        <th data-priority="2">Registro Sanitario</th>
                                        <th data-priority="2">Vida Util (dias)</th>
                                        <th data-priority="2">Pvp</th>
                                        <th>caja x plancha</th>
                                        <th>Plancha x estiba</th>
                                        <th>cajas x estibas</th>
                                        <th data-priority="2">Marca</th>
                                        <th >Fecha Actualizacion</th>
                                        <th>Origen</th>
                                        <th>Observación</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ( $Datas as $Data )
                                    <tr>
                                        
                                        <td>
                                           {{$Data->id}}
                                        </td>

                                        <td>
                                            {{$Data->sku_quala}}
                                        </td>
                                            
                                        <td>
                                            {{$Data->sku_unilever}}
                                        </td>

                                        <td>
                                            {{$Data->cliente}}
                                        </td>

                                        <td>
                                           {{$Data->descripcion}}
                                        </td>

                                        <td>
                                           {{$Data->ean13}}
                                        </td>

                                        <td>
                                           {{$Data->ean14}}
                                        </td>

                                        <td>
                                           {{$Data->ean128}}
                                        </td>

                                        <td>
                                           {{$Data->registro_sanitario}}
                                        </td>

                                        <td>
                                           {{$Data->vida_util}}
                                        </td>

                                        <td>
                                           {{$Data->pvp}}
                                        </td>

                                        <td>
                                           {{$Data->cajas_plancha}}
                                        </td>

                                        <td>
                                           {{$Data->plancha_estibas}}
                                        </td>

                                        <td>
                                           {{$Data->cajas_estibas}}
                                        </td>

                                        <td>
                                           {{$Data->marca}}
                                        </td>
                                        
                                        <td>
                                           {{$Data->fecha_actualizacion}}
                                        </td>

                                        <td>
                                           {{$Data->origen}}
                                        </td>

                                        <td>
                                            {{$Data->observacion}}
                                        </td>

                                        <td> 
                                            <a href="{{route('adm.data_logisticas.edit', $Data->id)}}" class="btn btn-orange-500 text-white border" >
                                                <i class="fa-solid fa-pen"></i>
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
