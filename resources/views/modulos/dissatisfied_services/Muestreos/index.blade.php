<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Listado de Muestreos</h3>
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
                    <h2>Registro de Muestreos</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
        <table id="reclamos" class="table text-green-500 table-striped align-middle dt-responsive" style="width:100%">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th data-priority="1">Bodega</th>
                    <th >Cliente</th>
                    <th>Contenedor</th>
                    <th>N° Guias</th>
                    <th>Fecha Recepción</th>
                    <th>Hora de Recepción</th>
                    {{-- <th>N° Pedido</th> --}}
                    <th data-priority="2">Responsable</th>
                    <th data-priority="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $Muestreos as $Muestreo )
                <tr>
                 {{-- <td>
                    {{$Muestreo->id}}
                 </td> --}}
                 <td>
                    {{$Muestreo->bodega}}
                 </td>
                 <td>
                    {{$Muestreo->clientes->social_reason}}
                 </td>
                 <td class="text-uppercase">
                    {{$Muestreo->contenedor}}
                 </td>
                 <td>
                    {{$Muestreo->guias}}
                 </td>
                 <td>
                    {{$Muestreo->fecha_recepcion}}
                 </td>
                 <td>
                    {{date("H:m A",strtotime($Muestreo->hora_recepcion))}}
                 </td>
                 {{-- <td>
                    {{$Muestreo->n_pedido}}
                 </td> --}}
                 <td>
                    {{$Muestreo->responsable}}
                 </td>
                 <td>
                    <div class="btn-group btn-group-md " role="group" aria-label="">
                        <a href="{{route('adm.view.reporte', encrypt($Muestreo->id))}}" class="btn bg-lead-500 text-white border" target="_blank" >
                            <i class="fa-solid fa-file-pdf"></i>
                        </a>

                    <a href="{{ route('adm.pdf.muestreo', encrypt($Muestreo->id)) }}" class="btn btn-orange-500 text-white border" target="_blank" >
                        <i class="fa-solid fa-file-pdf"></i>
                    </a>
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
