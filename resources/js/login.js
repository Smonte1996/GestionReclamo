// $('.js-tilt').tilt({
//     scale: 1.1
// })


/*==================================================================
[ Validate ]*/
var input = $('.validate-input .input100');

$('.validate-form').on('submit', function () {
    var check = true;

    for (var i = 0; i < input.length; i++) {
        if (validate(input[i]) == false) {
            showValidate(input[i]);
            check = false;
        }
    }

    return check;
});


$('.validate-form .input100').each(function () {
    $(this).focus(function () {
        hideValidate(this);
    });
});

function validate(input) {
    if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
        if ($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            return false;
        }
    } else {
        if ($(input).val().trim() == '') {
            return false;
        }
    }
}

function showValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).addClass('alert-validate');
}

function hideValidate(input) {
    var thisAlert = $(input).parent();

    $(thisAlert).removeClass('alert-validate');
}

// Datatable users

$('#table_users').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/datausers',
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
        data: 'email',
        name: 'email'
    },
    {
        data: 'created_at',
        name: 'created_at'
    },
    {
        data: 'updated_at',
        name: 'updated_at'
    }
    ],
});


$('#table_cities').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/datacities',
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
        name: 'Ciudad'
    },
    {
        data: 'country.name',
        name: 'Pais'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});
//DataTable Countries

$('#table_countries').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: 'https://ransa-reclamo.com/datacountries',
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
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});

//DataTable Warehouses

$('#table_warehouses').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/datawarehouses',
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
        name: 'Almacén'
    },
    {
        data: 'city.name',
        name: 'Ciudad'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});
//DataTable Departaments

$('#table_departaments').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/datadepartaments',
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
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});
//DataTable Employees

$('#table_employees').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/dataemployees',
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
        name: 'Nombres'
    },
    {
        data: 'lastname',
        name: 'Apellidos'
    },
    {
        data: 'identification_card',
        name: 'Cédula'
    },
    {
        data: 'position_id',
        name: 'Cargo'
    },
    {
        data: 'warehouse_id',
        name: 'Bodega'
    },
    {
        data: 'departament_id',
        name: 'Área'
    },
    {
        data: 'created_at',
        name: 'F. creación'
    },
    {
        data: 'updated_at',
        name: 'F. actualización'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});
//DataTable Clients

$('#table_clients').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/dataclients',
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
        data: 'social_reason',
        name: 'Razon Social'
    },
    {
        data: 'ruc',
        name: 'RUC'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});

//Datatable roles

$('#table_roles').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/dataroles',
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
        data: 'guard_name',
        name: 'guard_name'
    },
    {
        data: 'action',
        name: 'Acciones'
    },

    ],
});
//Datatable permissions

$('#table_permissions').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/datapermissions',
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
        data: 'guard_name',
        name: 'guard_name'
    },
    {
        data: 'action',
        name: 'Acciones'
    },

    ],
});
//DataTable Suppliers

$('#table_suppliers').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/datasuppliers',
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
        data: 'social_reason',
        name: 'Razon Social'
    },
    {
        data: 'ruc',
        name: 'RUC'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});
//DataTable Activities

$('#table_activities').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/dataactivities',
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
        data: 'departament_id',
        name: 'Departamento'
    },
    {
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});


$('#table_positions').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/dataposiciones',
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
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});


$('#table_actions').DataTable({
    responsive: true,
    processing: true,
    serverSide: true,
    ajax: {
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },        
        url: 'https://ransa-reclamo.com/dataacciones',
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
        data: 'action',
        name: 'acciones',
        orderable: false,
        searchable: false
    }
    ],
});



$(".select2").select2();
