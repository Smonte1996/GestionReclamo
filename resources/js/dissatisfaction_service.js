$('#table_notification_dissatisfactions').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'https://ransa-reclamo.com/datanotificationdissatisfactions',
        type: 'POST',
    },
    language: {
        url: '//cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json'
    },
    columns: [{
        data: 'id',
        name: 'notification_services.id'
    },
    {
        data: 'warehouse.name',
        name: 'warehouse.name'
      },
    {
        data: 'dissatisfaction_service.notification_type',
        name: 'dissatisfaction_service.notification_type'
    },
    {
        data: 'dissatisfaction_service.activity.name',
        name: 'dissatisfaction_service.activity.name',
        orderable: false,
        searchable: false
    },
    {
        data: 'client.social_reason',
        name: 'client.social_reason'
    },
    {
        data: 'employee.name',
        name: 'employee.name'
    },
    {
        data: 'estados',
        name: 'Estado',
        orderable: false,
        searchable: false        
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});

$('#table_notification_dissatisfactions tbody').on("click", ".images", function () {
    var dataimages = $(this).attr("data-bs-whatever");
    var jsonimage = JSON.parse(dataimages);
    var images = '';
    var allowedExtensions = /(.jpg|.jpeg|.png)$/i;
    $.each(jsonimage, function (index, value) {
        if (allowedExtensions.exec(value.name)) {
            images += '<img class="rounded img-thumbnail" width="200" src="img/' + value.name + '" alt="">';
        }
    });
    $(".imagesc").html(images);
})


$('#table_dissatisfaction_services').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'https://ransa-reclamo.com/dataservicios_insatisfaccion',
        type: 'POST',
    },
    language: {
        url: '//cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json'
    },
    columns: [{
        data: 'id',
        name: 'id'
    },
    {
        data: 'name',
        name: 'name'
    },
    {
        data: 'notification_type',
        name: 'notification_type',
    },
    {
        data: 'activity.name',
        name: 'activity.name'
    },
    {
        data: 'created_at',
        name: 'created_at'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});
