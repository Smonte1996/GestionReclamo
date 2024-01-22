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
<table width="100%">
    <tr>
    <td align="right"><img width="100" src="{{asset('img/logo-ransa.png')}}"></td>
    </tr>
</table>
<table width="100%">
<tr class="color-green titulo mb">
<td> Atención de <span class="text-titulo">reclamo</span></td>
</tr>
<table class="cuerpo mt" width="100%">
<tr>
<td class="color-lead">
Hola,
</td>
</tr>
<tr>
<td class="color-lead">
Usted ha sido asignado como responsable para investigar el reclamo del cliente. 
</td>
</tr>
<tr>
<td class="color-lead">
    El ticket de atención es: {{$solicitud->codigo_generado}}
</td>
</tr>

<table width="100%" class="cuerpo mt">
<tr>
    <td color-lead>
    Por favor, registre las acciones dentro de las 72 horas siguientes, utilizando el botón de acceso.
    </td>
</tr>
</table>

<table width="100%" class="cuerpo" cellpadding="0" cellspacing="0">

<tr>
<td class="color-orange cuerpo mt">
    Tu atención es importante para mejorar la experiencia de servicio de nuestros clientes.
</td>
</tr>
<tr>
<br>
@switch($solicitud->clasificacion->causal_general_id)
    @case(1)
    @component('mail::button', ['url' => route('adm.Investigacion.correccion', ['solicitud' => $solicitud->clasificacion->solicitude_id]), 'color' => 'green'])
        Acceder
        @endcomponent 
        @break
    @case(5)
    @component('mail::button', ['url' => route('adm.Investigacion.correccion', ['solicitud' => $solicitud->clasificacion->solicitude_id]), 'color' => 'green'])
        Acceder
        @endcomponent 
        @break
    @default
@component('mail::button', ['url' => route('adm.Investigador', ['solicitud'=> $solicitud->clasificacion->solicitude_id]), 'color' => 'green'])
Acceder
@endcomponent      
@endswitch

</tr>
<tr>
<td>
</td>
</tr>
</table>

</table>
</table>
@endcomponent
