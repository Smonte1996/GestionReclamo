<x-app-layout>
    <div class="right_col" role="main">

            <div class="page-title">
                <div class="title_left">
                    <h3>Tareas Pendiente</h3>
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

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div class="row m-0 mb-3">
                                    <fieldset class="border border-2 rounded pb-2">
                                        <legend class="rounded w-50 d-none d-sm-block float-none bg-green-500 text-white ps-5 ms-4">Información general</legend>
                                        <legend class="rounded float-none d-sm-none bg-green-500 text-white fs-6 p-1">Información general</legend>
                                    <table width="100%" class="pt-3 border border-dark" cellspacing="0" cellpadding="3">
                                        <tr>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                1. Uniforme completo y limpio.
                                            </td>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                4. Uñas cortas, limpias y sin esmalte.
                                            </td>
                                            <td class="border border-end-0" style="font-size:12px;">
                                                7. No usa perfume.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                2. Cabello correctamente peinado.
                                            </td>
                                            <td class="border border-start-0" style="font-size:12px;">
                                               5. Botas limpias y lustrada.
                                            </td>
                                            <td class="border border-end-0" style="font-size:12px;">
                                               8. Manos  limpias y sin heridas.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                3. Uso correcto de cofia.
                                            </td>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                6. Rostro sin maquillaje.
                                            </td>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                9. No usa accesorios (aretes, cadenas, anillo, etc).
                                            </td>
                                        </tr>
                                         <tr>
                                            <td class="border border-start-0" style="font-size:12px;">
                                                10. Uniforme en buen estado.
                                            </td>

                                            <td class="border border-start-0" style="font-size:12px;">
                                                11. Casco/ cofia en buen estado.
                                            </td>

                                            <td class="border border-start-0" style="font-size:12px;">
                                                12. Botas en buen estado.
                                            </td>
                                         </tr>
                                         <tr>
                                            <td colspan="3" class="border border-start-0 text-center" style="font-size:12px;">
                                                13. Hace uso de guantes cuando corresponda.
                                            </td>
                                         </tr>
                                    </table>

                                    <form action="{{route('adm.Tasks.Maquila',[$resultado,$ids])}}" method="POST" id="confirmaction">
                                        @csrf
                                        @method('PUT')
                                    <table  width="100%" class="border border-dark" cellspacing="0" cellpadding="3">
                                       <tr>
                                        <td class="text-center border border-dark">
                                        Personal
                                        </td>
                                         <td class="text-center border border-dark">
                                            1
                                         </td>
                                         <td class="text-center border border-dark">
                                            2
                                         </td>
                                         <td class="text-center border border-dark">
                                            3
                                         </td>
                                         <td class="text-center border border-dark">
                                            4
                                         </td>
                                         <td class="text-center border border-dark">
                                            5
                                         </td>
                                         <td class="text-center border border-dark">
                                            6
                                         </td>
                                         <td class="text-center border border-dark">
                                            7
                                         </td>
                                         <td class="text-center border border-dark">
                                            8
                                         </td>
                                         <td class="text-center border border-dark">
                                            9
                                         </td>
                                         <td class="text-center border border-dark">
                                            10
                                         </td>
                                         <td class="text-center border border-dark">
                                            11
                                         </td>
                                         <td class="text-center border border-dark">
                                            12
                                         </td>
                                         <td class="text-center border border-dark">
                                            13
                                         </td>
                                         <td class="text-center border border-dark">
                                            Acción
                                         </td>
                                       </tr>
                                        @foreach ($workin as $tasks)
                                       <tr>
                                        <td class="text-center border border-dark">
                                            {{$tasks->personal}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->muc2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mbl2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mcl2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mcp2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->mna2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mul2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->mnp2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->mml2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->mnaa2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->mub2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mcb2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mbe2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                             {{$tasks->mhg2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                                <input type="checkbox" name="checklistMaquila"
                                                class="form-check-input text-green-500">
                                        </td>
                                       </tr>
                                       @endforeach
                                    </table>
                                </fieldset>
                             </div>
                             <div class="ms-4">
                                <div align="center">

                            <div class="text-center">
                                <x-jet-button id="confirmaction" type="submit" class="mt-4">Cerrar
                                </x-jet-button>
                            </div>
                            </div>
                            </div>
                            </form>
                        </div>
                    </div>
                 </div>
              </div>
          </div>
</x-app-layout>

{{-- @push('scripts')
<script>
    Livewire.on('select2', function() {
        $('.Selector').on('change', function(e){
            @this.set('clientes', e.target.value);
        });
        $(".Selector").select2();
       });
</script>
@endpush --}}

