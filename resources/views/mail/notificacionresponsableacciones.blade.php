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
        font-size: 13px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 10px;
    }

    .cuerpo {
        font-size: 13px;
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
<td> Atención al <span class="text-titulo">{{$solicitud->tipo_reclamo->name}}</span></td>
</tr> 
<table class="cuerpo mt" width="100%">
<tr>
<td class="color-lead">
Hola,
</td>
</tr>
<tr>
<td class="color-lead">
Usted ha sido asignado como responsable para realizar las siguientes acciones asociada a la atención de un reclamo. El detalle de las acciones se muestra a continuación. 
</td>
</tr>
<tr>
<td class="color-lead">
     El ticket de atención es: {{$solicitud->codigo_generado}} 
</td>
</tr>
<table width="100%" class="cuerpo" cellpadding="0" cellspacing="0">
<tr>
<td class="color-orange me">Acciones por cumplir</td>
</tr>
<tr>
<td>
<ul class="color-lead me">
 @foreach ($solicitud->acciones as $action)
<li>{{ $action->name }}</li>
@endforeach 
</ul>
</td>
</tr>
</table>
<table width="100%" class="cuerpo mt">
<tr>
<td color-lead>
La fecha propuesta {{$solicitud->investigacion->fecha_programada->format('d/m/y')}} para cumplir las actividades asignada.
</td>
</tr>
</table>

<table width="100%" class="cuerpo" cellpadding="0" cellspacing="0">

<tr>
<td class="color-orange cuerpo mt">
    Tu atención oportuna es importante mejorara la experiencia de servicio de nuestros clientes.
</td>
</tr>
<tr>
<br>
@component('mail::button', ['url' => route('adm.confirmar.acciones', ['solicitude'=>$solicitud->investigacion->solicitude_id]), 'color' => 'green'])
Cumplimiento de acciones
@endcomponent  
</tr>
<tr>
<td>
</td>
</tr>
</table>

</table>
</table>
@endcomponent
