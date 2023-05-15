<x-app-layout>
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Matriz de Servicio No Conforme</h3>
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
            <form action="{{ route('notifications.update', $notification_service) }} " method="post"
                id="imgcorrection">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Confirmación de Acciones</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    {{-- @if ($notification_service->dissatisfaction_service->notification_type == 'NO CONFORMIDAD')
                                        <x-jet-button type="button" id=""><i
                                                class="fa fa-solid fa-upload"></i>
                                            Análisis
                                        </x-jet-button>
                                    @endif --}}
                                    <li>
                                        <x-jet-button type="button" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal"><i class="fa fa-solid fa-eye"></i> Evidencia
                                        </x-jet-button>
                                    </li>
                                    <li>
                                        <x-jet-button type="button" id="imgcorreccion"><i
                                                class="fa fa-solid fa-upload"></i>
                                            Adjuntar
                                        </x-jet-button>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div id="previewsimg">
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-500">Reportado
                                                por</label>
                                            <div class="text-orange-500 fs-6">
                                                {{ $notification_service->employee->name . ' ' . $notification_service->employee->lastname }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-500">Proceso</label>
                                            <div class="text-orange-500 fs-6">
                                                {{ $notification_service->dissatisfaction_service->activity->name }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-500">Tipo</label>
                                            <div class="text-orange-500 fw-bold fs-6">
                                                {{ $notification_service->dissatisfaction_service->notification_type }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-500">Cliente</label>
                                            <div class="text-orange-500 fw-bold fs-6">
                                                {{ $notification_service->client->social_reason }}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-500">Potencial
                                                Servicio No Conforme</label>
                                            <div class="text-orange-500 fs-6">
                                                {{ $notification_service->dissatisfaction_service->name }}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1"
                                                class="form-label text-lead-500">Observaciones</label>
                                            <div class="text-orange-500 fs-6">
                                                {{ $notification_service->observations }}</div>
                                        </div>
                                    </div>
                                </div>

                                <fieldset class="border border-2">
                                    <legend class="rounded w-50 d-none d-sm-block float-none bg-lead-500 text-white ps-5 ms-4">Da check a
                                        las
                                        acciones cumplidas</legend>
                                        <legend class="rounded float-none d-sm-none bg-lead-500 text-white fs-6 p-1">Da check a
                                            las
                                            acciones cumplidas</legend>                                        
                                    <div class="ms-4">
                                        <table class="table w-100 text-green-400">
                                            @foreach ($notification_service->dissatisfaction_service->actions as $action)
                                                <tr>
                                                    <td class="">
                                                        {{ $action->name }}
                                                    </td>
                                                    <td class="ps-5">
                                                        <div class="form-check">
                                                            <input type="checkbox" name="action_id[]"
                                                                class="form-check-input text-green-500">
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach

                                        </table>
                                    </div>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </fieldset>
                                <div class="col-12">
                                    <label class="form-label text-orange-500">Observaciones:</label>
                                    <textarea name="endobservations" id="" class="form-control"></textarea>
                                </div>
                                <div class="text-center">
                                    <x-jet-button id="confirmaction" class="mt-4">Confirmar Acciones
                                    </x-jet-button>
                                </div>
                            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    {{-- Modal para Visualizar las imagenes --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="overflow-scroll d-block imagesc">
                         @foreach ($notification_service->attached_files as $files)
                            <img class="rounded img-thumbnail" width="200" src="{{ asset($files->path) }}" alt="">
                        @endforeach 
                    </div>

                </div>
                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@section('scripts')
    <script>
        window.addEventListener("load", function(event) {
            var myDropzone = new Dropzone('#imgcorrection', { // Make the whole body a dropzone
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                paramName: 'file',
                uploadMultiple: true,
                // acceptedFiles: ['image/*','application/vnd.ms-excel','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'],
                parallelUploads: 100,
                maxFiles: 4,
                autoProcessQueue: false,
                previewTemplate: '<div class="p-1"><table class="text-center w-100 align-middle table-striped"><tr><td><p data-dz-name></p><strong class="text-danger"data-dz-errormessage></strong></td><td><span data-dz-size></span></td><td> <button data-dz-remove class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button></td></tr></table></div>',
                previewsContainer: "#previewsimg", // Define the container to display the previews
                clickable: "#imgcorreccion", // Define the element that should be used as click trigger to select files.
                // The setting up of the dropzone
                init: function() {
                    var myDropzone = this;
                    // First change the button to actually tell Dropzone to process the queue.
                    this.element.querySelector("button[type=submit]").addEventListener("click",
                        function(
                            e) {
                            // Make sure that the form isn't actually being sent.
                            e.preventDefault();
                            e.stopPropagation();
                            var count = myDropzone.getAcceptedFiles().length;
                            var inputcheck = $("input[type=checkbox]").length;
                            var countcheck = $("input:checked").length;
                            if (inputcheck != countcheck) {
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'Debe Completar todas las acciones para continuar..',
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                })
                            } else {
                                if (count > 0) {
                                    myDropzone.processQueue();
                                } else {
                                    $("#imgcorrection").submit();
                                }
                            }
                        });

                    // Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
                    // of the sending event because uploadMultiple is set to true.
                    this.on("sendingmultiple", function() {

                        // Gets triggered when the form is actually being sent.
                        // Hide the success button or the complete form.
                    });
                    this.on("successmultiple", function(files, response) {
                        // Gets triggered when the files have successfully been sent.
                        // Redirect user or notify of success.
                        // console.log(response);
                        // console.log(files);
                        window.location = response
                    });
                    this.on("errormultiple", function(files, response) {
                        // Gets triggered when there was an error sending the files.
                        // Maybe show form again, and notify user of error
                        // console.log(files);
                        // console.log(response);
                    });
                }
            });


        })
    </script>
@show
