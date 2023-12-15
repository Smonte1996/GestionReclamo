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
<table>
    <tr>
    <td align="rigth"><img width="100" src="{{asset('img/logo.png')}}"></td>
    </tr>
</table>
<table width="100%">
<tr class="color-green titulo mb">
<td> Comunicado de <span class="text-titulo">{{ $notification->dissatisfaction_service->notification_type }} </span></td>
</tr>
<table class="cuerpo mt" width="100%">
<tr>
<td class="color-lead">
Estimados/a,
</td>
</tr>
<tr>
<td class="color-lead">
Le informamos que se cerrado correctamente la {{ $notification->dissatisfaction_service->notification_type }}.
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
    <td class="color-lead me">Cliente:</td>
    <td class="color-lead me">{{ $notification->client->social_reason}}</td>
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
</table>
</td>
</tr>
</table>
</tr>
</table>
</table>
@endcomponent
