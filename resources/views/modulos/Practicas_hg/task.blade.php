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
                                            <td class="border border-start-0" style="font-size:12px; color:black;">
                                                1. Uniforme completo y limpio (ambiente seco, refrigerado o congelado).
                                            </td>
                                            <td class="border border-start-0" style="font-size:12px; color:black;">
                                                4. No usa accesorios (reloj, cadena, anillo, pulsera, etc.).
                                            </td>
                                            <td class="border border-end-0" style="font-size:12px; color:black;">
                                                6. Uñas cortas y limpias (aplica para personal operativo).
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border border-start-0" style="font-size:12px; color:black;">
                                                2. Botas limpias, en buen estado y cordones atados.
                                            </td>
                                            <td class="border border-start-0" style="font-size:12px; color:black;">
                                                3. Casco limpio, en buen estado y con nombre y apellido.
                                            </td>
                                            <td class="border border-end-0" style="font-size:12px; color:black;">
                                                5. Cabello Correctamente peinado (mantiene buen aspecto).
                                            </td>
                                        </tr>
                                    </table>

                                    <form action="{{ route('adm.p.h&g.update', $resultado) }}" method="post" id="confirmaction">
                                        {{-- @php
                                            echo $resultado;
                                        @endphp --}}
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
                                            Acción
                                         </td>
                                       </tr>
                                       @foreach ($workin as $tasks)
                                       <tr>
                                        <td class="text-center border border-dark">
                                         {{$tasks->personal}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->puc2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->pbl2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->pcl2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->pcp2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->pna2}}
                                        </td>
                                        <td class="text-center border border-dark">
                                            {{$tasks->pul2}}
                                        </td>
                                        <td class="text-center border border-dark">

                                                <input type="checkbox" name="checklist"
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

