<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Listado de Niveles Estandar</h3>
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
                            <h2>Niveles Estandar Militar</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-green-500 btn text-white btn-sm" href="{{route('adm.Tamaño_muestra.create')}}">Registrar</a>

                        </div>
                        <div class="x_content">
                            <table id="reclamos" class="table text-green-500 align-middle table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th class="text-center">Nivel Militar Estandar</th>
                                        <th class="text-center" data-priority="1">Nivel</th>
                                         <th class="text-center">Muestra lote</th>
                                        <th class="text-center">Fecha Registro</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $Tamaños as $Tamaño ) 
                                    <tr>
                                        
                                         <td>
                                           {{$Tamaño->id}}
                                        </td>

                                        <td class="text-center">
                                            {{$Tamaño->Niveles_estandar->name}}
                                        </td>
                                            
                                        <td class="text-center">
                                            {{$Tamaño->nivel}}
                                        </td>

                                        <td class="text-center">
                                            {{$Tamaño->muestra}}
                                        </td> 

                                        <td>
                                            {{$Tamaño->created_at}}
                                        </td>

                                         <td>
                                            <a href="#" class="btn btn-orange-500 text-white border" >
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
