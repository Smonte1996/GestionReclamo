<style>
    .color-lead {
        color: rgb(0, 0, 0);
    }

    .color-orange {
        color: #F29104;
    }

    .color-green {
        color: #009B3A;
    }

    .titulo {
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 10px;
        font: verdana;
    }

    .cuerpo {
        font-size: 11px;
        font-weight: bold;
        font: verdana;
    }

    .me {
        margin-right: 4px;
    }

    .mb {
        margin-bottom: 5px;
    }

    .mt
    {
        margin-top: 5px;
    }

    .ms {
        margin-left: 5px;
    }
    .text-titulo
    {
        text-transform: lowercase;
    }
</style>


@component('mail::message')

<table width="100%">
<table width="100%">
<tr>
 <td align="right"><img width="100" src="{{ asset('img/logo-ransa.png') }}"></td>
</tr>
</table>
<tr class="color-green titulo mb">
<td>Comunicado de <span class="text-titulo">{{ $notification->dissatisfaction_service->notification_type }} </span></td>
</tr>
<table class="cuerpo mt" width="100%">
<tr>
<td class="color-lead">
Estimados,
</td>
</tr>
<tr>
<td class="color-lead">
Queremos informarte del siguiente hallazgo registrado como servicio no conforme.
</td>
</tr>

<tr>
<table width="100%" class="cuerpo mt">
<tr>
<td class="color-lead me">Proceso:</td>
<td class="color-lead me">{{ $notification->dissatisfaction_service->activity->name }}</td>
</tr>
<tr>
<td class="color-lead me">Potencial Servicio No Conforme:</td>
<td class="color-lead me">{{ $notification->dissatisfaction_service->name }}</td>
</tr>
<tr>
<td class="color-lead me">Almacen:</td>
<td class="color-lead me">{{ $notification->warehouse->name }}</td>
</tr>
<tr>
<td class="color-lead me">Cliente:</td>
<td class="color-lead me">{{ $notification->client->social_reason }}</td>
</tr>
<tr>
<td class="color-lead me">Observaciones:</td>
<td class="color-lead me">{{ $notification->observations }}</td>
</tr>
<tr>
<td class="color-lead me">Reportado por:</td>
<td class="color-lead me">
{{ $notification->employee->name . ' ' . $notification->employee->lastname }}</td>
</tr>
</table>
<br>
<table width="100%" class="cuerpo mt" cellpadding="0" cellspacing="0">
<tr>
<td class="color-orange me">Acciones por Cumplir</td>
</tr>
<tr>
<td>
<ul class="color-lead me">
@foreach ($notification->dissatisfaction_service->actions as $action)
<li>{{ $action->name }}</li>
@endforeach
</ul>
</td>
</tr>
<tr>
<td class="color-lead cuerpo mt">
Por favor, registre el cumplimiento de las acciones dentro de las 72 horas siguientes,
utilizando este botón de acceso:
</td>
</tr>
<br>
<tr>
@component('mail::button', ['url' => route('notifications.edit', ['notification_service' => $notification]), 'color' => 'green'])
Cumplimiento de acciones
@endcomponent
</tr>
<tr>
<td>
<table>
<tr>
<!-- <td align="left"><img src="{{ asset('img/Llave_Somos-un-solo-equipo_verde.png') }}" width="200" alt=""></td> -->
{{-- <td></td> --}}
{{-- <td align="rigth"><img width="200" src="{{ asset('img/logo-ransa.png') }}"></td> --}}
</tr>
</table>
</td>
</tr>
</table>
</tr>
</table>
</table>
@endcomponent
