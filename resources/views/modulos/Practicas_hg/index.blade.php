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
                                        {{-- <th>Responsable</th> --}}
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
                                        {{$Higiene->solicitud}}@isset($Higiene->Proveedor)
                                        -{{$Higiene->Proveedor}}
                                        @endisset
                                     </td>
                                     
                                        {{-- @foreach ($Higiene->Practicashgs as $responsable )
                                        @php
                                         $super[] = $responsable->Supervisor->name;
                                         $respuesta = array_unique($super);
                                        //  dd($respuesta);
                                        @endphp
                                        <td>
                                            @php
                                                echo "$respuesta";
                                            @endphp  
                                       </td> 
                                        @endforeach --}}
                                     
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
                                                <a href="{{route('adm.pdf.Proveedor', $Higiene->id)}}" class="btn bg-orange-500 text-white border" target="_blank" >
                                                    <i class="fa-solid fa-file-pdf"></i>
                                                </a>
                                                @php
                                                $idpro;
                                                $idpro1 = [0];
                                            @endphp
                                               @foreach ( $Higiene->Proveedor as $prueba)
                                               @php
                                                   $idpro = $prueba->infor_practicahg_id;
                                                   $hola = 0;
                                                    foreach ($idpro1 as $elemento) {
                                                      if ($elemento === $idpro) {
                                                        $hola++;
                                                      } }
                                               @endphp

                                               @if (empty($prueba->puc1) && empty($prueba->pbl1) && empty($prueba->pcl1) && empty($prueba->pcp1) && empty($prueba->pna1) && empty($prueba->pul1))

                                               @else
                                                  @if (empty($prueba->puc3) && empty($prueba->pbl3) && empty($prueba->pcl3) && empty($prueba->pcp3) && empty($prueba->pna3) && empty($prueba->pul3))
                                                  {{-- if {{$idpro1[0]}} != {{$prueba->infor_practicahg_id}} --}}
                                                  @if ($hola <= 1)
                                                 <a href="{{route('adm.p.h&g.edit', $Higiene->id)}}" class="btn btn-orange-500 text-white border" target="_blank" >
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                    Tarea
                                                 </a>
                                                 @else

                                                 @endif
                                                     @else

                                                     @if ($hola <= 1)
                                                     <span class="btn bg-green-500 p-1 text-white border">Tarea cerrada</span>
                                                    @else

                                                   @endif
                                                     @endif
                                                  @endif
                                                  @php
                                                   array_push($idpro1, $prueba->infor_practicahg_id);
                                                   @endphp
                                                  @endforeach
                                            </div>
                                                @break

                                                @case('Maquila')
                                                <div class="btn-group btn-group-md " role="group" aria-label="">
                                                    <a href="{{route('adm.Pdf.maquila', $Higiene->id)}}" class="btn bg-green-500 text-white border" target="_blank" >
                                                        <i class="fa-solid fa-file-pdf"></i>
                                                    </a>
                                                    @php
                                                    $idpro3;
                                                    $idpro2 = [0];
                                                @endphp
                                                @foreach ( $Higiene->Maquila as $prueba)
                                                @php
                                                    $idpro3 = $prueba->infor_practicahg_id;
                                                    $hola = 0;
                                                     foreach ($idpro2 as $elemento) {
                                                       if ($elemento === $idpro3) {
                                                         $hola++;
                                                       } }
                                                @endphp
                                                    @if (empty($prueba->muc1) && empty($prueba->mbl1) && empty($prueba->mcl1) && empty($prueba->mcp1) && empty($prueba->mna1) && empty($prueba->mul1) && empty($prueba->mml1) && empty($prueba->mnaa1) && empty($prueba->mub1) && empty($prueba->mcb1) && empty($prueba->mbe1) && empty($prueba->mhg1))

                                                    @else
                                                       @if (empty($prueba->muc3) && empty($prueba->mbl3) && empty($prueba->mcl3) && empty($prueba->mcp3) && empty($prueba->mna3) && empty($prueba->mul3) && empty($prueba->mml3) && empty($prueba->mnaa3) && empty($prueba->mub3) && empty($prueba->mcb3) && empty($prueba->mbe3) && empty($prueba->mhg3))
                                                       @if ($hola <= 1)
                                                 <a href="{{route('adm.Tarea.Maquila', $Higiene->id)}}" class="btn btn-orange-500 text-white border" target="_blank" >
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                    Tarea
                                                </a>
                                                @else

                                                @endif
                                                    @else

                                                    @if ($hola <= 1)
                                                    <span class="btn bg-green-500 p-1 text-white border">Tarea cerrada</span>
                                                   @else

                                                  @endif
                                                    @endif
                                                 @endif
                                                 @php
                                                  array_push($idpro2, $prueba->infor_practicahg_id);
                                                  @endphp
                                                 @endforeach
                                                </div>
                                                @break

                                            @default
                                            <div class="btn-group btn-group-md " role="group" aria-label="">
                                                <a href="{{route('adm.pdf.hgs', $Higiene->id)}}" class="btn bg-lead-500 text-white border" target="_blank" >
                                                    <i class="fa-solid fa-file-pdf"></i>
                                                </a>
                                                @php
                                                $idpro5;
                                                $idpro4 = [0];
                                            @endphp
                                               @foreach ( $Higiene->Practicashgs as $prueba)
                                               @php
                                                   $idpro5 = $prueba->infor_practicahg_id;
                                                   $hola = 0;
                                                    foreach ($idpro4 as $elemento) {
                                                      if ($elemento === $idpro5) {
                                                        $hola++;
                                                      } }
                                               @endphp

                                               @if (empty($prueba->uc1) && empty($prueba->bl1) && empty($prueba->cl1) && empty($prueba->cp1) && empty($prueba->na1) && empty($prueba->ul1))

                                               @else
                                                  @if (empty($prueba->uc3) && empty($prueba->bl3) && empty($prueba->cl3) && empty($prueba->cp3) && empty($prueba->na3) && empty($prueba->ul3))
                                                  @if ($hola <= 1)
                                             <a href="{{route('adm.Tarea.ransa', $Higiene->id)}}" class="btn btn-orange-500 text-white border" target="_blank" >
                                                <i class="fa-regular fa-pen-to-square"></i>
                                                Tarea
                                            </a>
                                            @else

                                            @endif
                                                @else

                                                @if ($hola <= 1)
                                                <span class="btn bg-green-500 p-1 text-white border">Tarea cerrada</span>
                                               @else

                                              @endif
                                                @endif
                                             @endif
                                             @php
                                              array_push($idpro4, $prueba->infor_practicahg_id);
                                              @endphp
                                             @endforeach
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
