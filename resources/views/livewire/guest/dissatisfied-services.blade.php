<div class="container-fluid">
    <div>
        <div class="d-none d-md-inline">
            <x-jet-application-logo />
        </div>
        <div class="ps-md-5 d-inline align-middle fs-2 fw-bold">
            Notificación de Servicio No Conforme
        </div>
    </div>


    <div class="mx-auto">
        <div class="border rounded p-4">
            <label class="text-lead-500 fw-bold fs-5">
            </label>
            @php
            if (isset($this->employee->name)) {
                echo '<small id="helpId" class="form-text text-muted">';
                echo $this->employee->name . ' ' . $this->employee->lastname;
                echo '</small>';
            } else {
                if ($this->identification_card != "") {
                    echo '<small id="helpId" class="form-text text-muted">';
                        echo 'Usuario No Encontrado';
                echo '</small>';
                    
                }
            }
        @endphp
            <div class="row">
                <div class="col-md-6 col-lg-4 col-12">
                    <label class="col-12 col-md-2 text-orange-500 col-form-label col-form-label-sm">Cédula:</label>
                    <div class="col-12 col-md-10">
                        <input type="number" wire:model.lazy="identification_card"  name="identification_card" class="form-control @error('identification_card') is-invalid @enderror"
                            id="identification_card">
                            @error('identification_card')
                            <small id="identification_cardhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                            @enderror
                    </div>
                </div>
                {{--Se agrego el campo de almacen--}}
                <div class="col-lg-4 col-md-6 pt-2">
                    <label class="col-sm-3 text-orange-500 col-form-label col-form-label-sm">Almacen</label>
                    <div class="col-12 col-sm-9">
                        <select class="form-control @error('almacen_id') is-invalid @enderror"  wire:model="almacen_id" name="almacen_id" >
                            <option selected value="">Escoger una opción</option>
                            @foreach ($almacenes as $almacen)
                                <option value="{{ $almacen->id }}">{{ $almacen->name }}</option>
                            @endforeach
                        </select>
                        @error('almacen_id')
                        <small id="almacen_idhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                        @enderror                        
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label
                        class="col-sm-12 col-md-3 text-orange-500 col-form-label col-form-label-sm">Procesos:</label>
                    <div class="col-12 col-md-9">
                        <select class="form-control @error('activity_id') is-invalid @enderror" wire:model="activity_id" name="" id="">
                            <option selected value="">Escoger una opción</option>
                            @foreach ($activities as $activity)
                                @if ($activity->departament->name)
                                    <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('activity_id')
                        <small id="activity_idhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4 col-12 col-md-12 pt-2">
                    <label class="col-sm-3 text-orange-500 col-form-label col-form-label-sm">Cliente</label>
                    <div class="col-12 col-sm-9">
                        <select class="form-control @error('client_id') is-invalid @enderror" wire:model="client_id" name="client_id" id="client_id">
                            <option selected value="">Escoger una opción</option>
                            @foreach ($clients as $client)
                                <option value="{{ $client->id }}">{{ $client->social_reason }}</option>
                            @endforeach
                        </select>
                        @error('client_id')
                        <small id="activity_idhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                        @enderror                        
                    </div>
                </div>
                <div class="col-12 col-md-12 pt-2">
                    <label class="col-sm-3 text-orange-500 col-form-label col-form-label-sm">Potencial Servicio No
                        Conforme</label>
                    <div class="col-12 col-md-9">
                        <select class="form-control @error('dissatisfaction_service_id') is-invalid @enderror" wire:model="dissatisfaction_service_id" name=""
                            id="">
                            <option selected value="">Escoger una opción</option>
                            @if ($this->dissatisfaction_services != null)
                                @foreach ($this->dissatisfaction_services as $dissatisfaction_service)
                                    <option value="{{ $dissatisfaction_service->id }}">
                                        {{ $dissatisfaction_service->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('dissatisfaction_service_id')
                        <small id="activity_idhelpId" class="form-text text-muted invalid-feedback">{{ $message }}</small>
                        @enderror                         
                    </div>
                </div>
                <div class="col-12 col-md-12 pt-2">
                    <label class="col-12 col-md-2 text-orange-500 col-form-label col-form-label-sm">Observaciones</label>
                    <div class="col-sm-10 col-12">
                        <textarea wire:model="observations" name="observations" id="" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-12 pt-2">
                    <div class="col-12" wire:ignore>
                        <form class="dropzone" id="my-awesome-dropzone" method="GET">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-2">
        <x-jet-button wire:click="save" wire:loading.attr="disabled">Notificar Novedad  </x-jet-button>
    </div>
    <div>
        <fieldset class="border border-2 rounded p-2">
            <legend class="text-green-500 fw-bold">Sección Informativa</legend>
            <div class="row">
                @if ($this->dissatisfaction_service != null)
                    <div class="col-md-6">
                        <label class="text-lead-500 fs-6">Tipo Notificación</label>
                        <label
                            class="text-orange-500 fw-bold ms-5 fs-6">{{ $this->dissatisfaction_service->notification_type }}</label>
                    </div>
                    <div class="col-md-6">
                    <div class="col-md-6">
                            <label class="text-lead-500 fs-10">Lider</label>
                            <label class="text-orange-500 fw-bold ms-5 fs-6">
                                {{ $lider }}
                               
                            </label>
                        </div>
                    <br>
                        <label class="text-lead-500 fs-6">Responsables</label>
                        <label class="text-orange-500 fw-bold ms-5 fs-6">
                            {{$responsable}}
                        </label>
                    </div>
                    <div class="col-md-12 pt-3">
                        <div class="text-lead-500 fs-6 pb-2">
                            Acciones a Realizar
                        </div>
                        <div class="text-orange-500">
                            <ul class="d-grid gap-2">
                                @foreach ($this->dissatisfaction_service->actions as $action)
                                    <li>{{ $action->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
            </div>
        </fieldset>
    </div>  
    <div class="pt-3 float-sm-end">
        <img src="{{ asset('img/Llave_Vivimos-seguros_naranja.png') }}" class="imagepg" alt="">
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function() {
        var arrayFiles = [];
        let myDropzone = new Dropzone(".dropzone", {
            url: "/servicio",
            acceptedFiles: "image/*",
            method: "GET",
            paramName: "images",
            maxFilesize: 10,
            addRemoveLinks: true,
            dictRemoveFile: "Eliminar Imagen",
            dictInvalidFileType: "No se puede cargar este tipo de archivo",
            init: function() {

                this.on("addedfile", function(file) {

                    arrayFiles.push(file);
                    
                    @this.uploadMultiple('images', arrayFiles)

                })

                this.on("removedfile", function(file) {

                    var index = arrayFiles.indexOf(file);

                    arrayFiles.splice(index, 1);

                    @this.images = arrayFiles;



                })

            }
        });
    })
</script>
