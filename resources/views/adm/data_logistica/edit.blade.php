<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Actualizar Data Logistica</h3>
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
                            <h2>Actualización de la Data Logistica</h2>
                           
                            <div class="clearfix"></div>
                        </div>
                        <div class="">
                            <a class="btn-orange-500 btn text-white btn-sm" href="{{ route('adm.data_logisticas.index') }}"><i
                                    class="fa fa-solid fa-arrow-left"></i>
                                Regresar</a>
                        </div>
                        <div class="x_content">
                            <form action="{{route('adm.data_logisticas.update', $data_logistica)}}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-sm-12 col-md-4">
                                        <label for="" class="form-label fs-6 text-lead-500">SKU QUALA</label>
                                        <input type="text" class="form-control @error('sku_quala') is-invalid @enderror"
                                            name="sku_quala" id="sku_quala" aria-describedby="sku_qualahelpId"
                                            placeholder="Nuevo Sku Quala" value="{{ old('sku_quala', $data_logistica->sku_quala) }}">
                                            @error('sku_quala')
                                                <small id="sku_qualahelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">SKU UNILEVER</label>
                                           <input type="text" class="form-control @error('sku_unilever') is-invalid @enderror"
                                            name="sku_unilever" id="sku_unilever"  aria-describedby="sku_unileverhelpId"
                                            placeholder="Nuevo Sku Unilever" value="{{ old('sku_unilever', $data_logistica->sku_unilever) }}">
                                            @error('sku_unilever')
                                                <small id="sku_unileverhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Cliente</label>
                                           <input type="text" class="form-control @error('cliente') is-invalid @enderror"
                                            name="cliente" id="cliente"  aria-describedby="clientehelpId"
                                            placeholder="Nuevo Cliente" value="{{ old('cliente', $data_logistica->cliente) }}">
                                            @error('cliente')
                                                <small id="clientehelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Descripción</label>
                                           <input type="text" class="form-control @error('descripcion') is-invalid @enderror"
                                            name="descripcion" id="descripcion"  aria-describedby="descripcionhelpId"
                                            placeholder="Nueva Descripcion" value="{{ old('descripcion', $data_logistica->descripcion) }}">
                                            @error('descripcion')
                                                <small id="descripcionhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Ean 13</label>
                                           <input type="text" class="form-control @error('ean13') is-invalid @enderror"
                                            name="ean13" id="ean13"  aria-describedby="ean13helpId"
                                            placeholder="Nueva Ean 13" value="{{ old('ean13', $data_logistica->ean13) }}">
                                            @error('ean13')
                                                <small id="ean13helpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Ean 14</label>
                                           <input type="text" class="form-control @error('ean14') is-invalid @enderror"
                                            name="ean14" id="ean14"  aria-describedby="ean14helpId"
                                            placeholder="Nueva Ean 14" value="{{ old('ean14', $data_logistica->ean14) }}">
                                            @error('ean14')
                                                <small id="ean14helpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                               
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Ean 128</label>
                                           <input type="text" class="form-control @error('ean128') is-invalid @enderror"
                                            name="ean128" id="ean128"  aria-describedby="ean128helpId"
                                            placeholder="Nueva Ean 128" value="{{ old('ean128', $data_logistica->ean128) }}">
                                            @error('ean128')
                                                <small id="ean128helpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                               
                                        </div>
                                    
                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Registro Sanitario</label>
                                           <input type="text" class="form-control @error('registro_sanitario') is-invalid @enderror"
                                            name="registro_sanitario" id="registro_sanitario"  aria-describedby="registro_sanitariohelpId"
                                            placeholder="Nueva Resgitro Sanitario" value="{{ old('registro_sanitario', $data_logistica->registro_sanitario) }}">
                                            @error('registro_sanitario')
                                                <small id="registro_sanitariohelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                               
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Vida Util (dias)</label>
                                           <input type="text" class="form-control @error('vida_util') is-invalid @enderror"
                                            name="vida_util" id="vida_util"  aria-describedby="vida_utilhelpId"
                                            placeholder="Nueva Vida Util" value="{{ old('vida_util', $data_logistica->vida_util) }}">
                                            @error('vida_util')
                                                <small id="vida_utilhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                               
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">PVP</label>
                                           <input type="text" class="form-control @error('pvp') is-invalid @enderror"
                                            name="pvp" id="pvp"  aria-describedby="pvphelpId"
                                            placeholder="Nueva PVP" value="{{ old('pvp', $data_logistica->pvp) }}">
                                            @error('pvp')
                                                <small id="pvphelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror
                                               
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Cajas por plancha</label>
                                           <input type="text" class="form-control @error('cajas_plancha') is-invalid @enderror"
                                            name="cajas_plancha" id="cajas_plancha"  aria-describedby="cajas_planchahelpId"
                                            placeholder="Nueva Cajas por plancha" value="{{ old('cajas_plancha', $data_logistica->cajas_plancha) }}">
                                            @error('cajas_plancha')
                                                <small id="cajas_planchahelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Plancha por estiba</label>
                                           <input type="text" class="form-control @error('plancha_estibas') is-invalid @enderror"
                                            name="plancha_estibas" id="plancha_estibas"  aria-describedby="plancha_estibashelpId"
                                            placeholder="Nueva Plancha por estiba" value="{{ old('plancha_estibas', $data_logistica->plancha_estibas) }}">
                                            @error('plancha_estibas')
                                                <small id="plancha_estibashelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Cajas por estiba</label>
                                           <input type="text" class="form-control @error('cajas_estibas') is-invalid @enderror"
                                            name="cajas_estibas" id="cajas_estibas"  aria-describedby="cajas_estibashelpId"
                                            placeholder="Nueva Cajas por estiba" value="{{ old('cajas_estibas', $data_logistica->cajas_estibas) }}">
                                            @error('cajas_estibas')
                                                <small id="cajas_estibashelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Marca</label>
                                           <input type="text" class="form-control @error('marca') is-invalid @enderror"
                                            name="marca" id="marca"  aria-describedby="marcahelpId"
                                            placeholder="Nueva Marca" value="{{ old('marca', $data_logistica->marca) }}">
                                            @error('marca')
                                                <small id="marcahelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Fecha de actualización</label>
                                           <input type="text" class="form-control @error('fecha_actualizacion') is-invalid @enderror"
                                            name="fecha_actualizacion" id="fecha_actualizacion"  aria-describedby="fecha_actualizacionhelpId"
                                            placeholder="Nueva Fecha de actualizacion" value="{{ old('fecha_actualizacion', $data_logistica->fecha_actualizacion) }}">
                                            @error('fecha_actualizacion')
                                                <small id="fecha_actualizacionhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-4">
                                            <label for="" class="form-label fs-6 text-lead-500">Origen</label>
                                           <input type="text" class="form-control @error('origen') is-invalid @enderror"
                                            name="origen" id="origen"  aria-describedby="origenhelpId"
                                            placeholder="Nueva Origen" value="{{ old('origen', $data_logistica->origen) }}">
                                            @error('origen')
                                                <small id="origenhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>

                                        <div class="mb-3 col-sm-12 col-md-6">
                                            <label for="" class="form-label fs-6 text-lead-500">Observación</label>
                                           <textarea class="form-control @error('observacion') is-invalid @enderror"
                                            name="observacion" id="observacion"  aria-describedby="observacionhelpId"
                                             >{{old('observacion', $data_logistica->observacion)}}</textarea>
                                            @error('observacion')
                                                <small id="observacionhelpId"
                                                    class="form-text text-muted invalid-feedback">{{ $message }}</small>
                                            @enderror   
                                        </div>
                                </div>
                                <x-jet-button type="submit">Modificar</x-jet-button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>