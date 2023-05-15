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
        font-size: 13px;
        /* font-weight: bold; */
        font: verdana;
    }

    .cuerpos {
        font-size: 15px;
        font-weight: bold;
        font: verdana;
        text-align: center;
    }

    .nombre{
        font-size: 15px;
        font-weight: bold;
        font: verdana; 
    }

    .me {
        margin-right: 6px;
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
<td align="left">
<img width="300" src="{{asset('img/Reclamo.jpg')}}" alt="">  
</td> 
<td align="right"><img width="100" src="{{asset('img/logo-ransa.png')}}"></td>
</tr>
</table>
<table width="100%">
<tr>
<td class="color-green nombre">
Hola, {{ $solicitud->nombre }}
</td>
</tr>
<tr>
<td align="center">
 <img width="100%" src="{{ asset('img/investigacion.png') }}" >    
</td>   
</tr>
</table>

<table class="cuerpo mt" width="100%">
<td class="color-lead">
El reclamo ya ha sido asignado al responsable para su respectiva investigación y análisis con los planes de acciones definido.
</td>
<tr> 
<td>
<hr size="2px" color="black" />
</td>
</tr> 
</table>
<table class="cuerpo mt" width="100%">
<tr>
<td class="color-lead">
Queremos informarte que tu caso ha sido registrado.
</td>
</tr>
</table>
<table width="100%" class="cuerpo mt">
<tr>
<td class="color-lead ">N° de caso:</td>
<td class="color-lead me"> {{$solicitud->codigo_generado}}</td>
</tr>
<tr>
<td class="color-lead ">Cliente:</td>
 <td class="color-lead me">{{ $solicitud->cliente }}</td> 
</tr>
<tr>
<td class="color-lead ">Servicio Brindado por Ransa:</td>
<td class="color-lead me">{{ $solicitud->servicio_ransa->name }}</td> 
</tr>
<tr>
<td class="color-lead ">Sub servicio:</td>
<td class="color-lead me">{{ $solicitud->adicional->name }}</td>
</tr>
<tr>
<td class="color-lead ">Sede:</td>
<td class="color-lead me">{{ $solicitud->sede->name}}</td> 
</tr>
<tr>
<td class="color-lead ">Tipo de Novedad:</td>
<td class="color-lead me">{{ $solicitud->tipo_reclamo->name}}</td> 
</tr>
<tr>
<td class="color-lead ">Titulo del caso:</td>
<td class="color-lead me">{{ $solicitud->titulo}}</td>
</tr>
<tr>
<td class="color-lead ">Descripcion:</td>
<td class="color-lead me">{{ $solicitud->Descripcion }}</td> 
</tr>
</table>

<table width="100%" class="cuerpo mt" cellpadding="0" cellspacing="0">
<tr>
<td class="color-green cuerpos">
    ¡Hacemos de la logística una ventaja competitiva!
</td>
</tr>
</table>
@endcomponent
