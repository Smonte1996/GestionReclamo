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
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 10px;
    }

    .cuerpos {
        font-size: 18px;
        font-weight: bold;
        font: verdana;
        text-align: center;
    }

    .nombre{
        font-size: 20px;
        font-weight: bold;
        font: verdana;
    }

    .cuerpo {
        font-size: 15px;
        /* font-weight: bold; */
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
        margin-top: 8px;
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
<img width="100%" src="{{asset('img/cierre-caso.png')}}" >    
</td>   
</tr>
</table>
<table class="cuerpo mt" width="100%">
<td class="color-lead">
Queremos informarte que tu caso ha sido resuelto.
</td>
@isset($solicitud->investigacion->argumento)
<tr> 
<td class="color-lead titulo">
Respuesta al reclamo 
</td>
</tr>   
<tr>
<td>
<ul class="color-lead me">
    {{$solicitud->investigacion->argumento}}
    </ul>  
</td>
</tr>     
@endisset    
@isset($solicitud->investigacion->correccion)
<tr>
<td class="color-lead titulo">
    CORRECION
    </td>
    </tr>   
    <tr>
    <td>
<ul class="color-lead me">
    {{$solicitud->investigacion->correccion}}
    </ul>
</td>
</tr>
@endisset
<tr>
<td class="colir-lead">
Reafirmamos nuestro compromiso de mejorar tu experiencia de servicio y agradecemos la confianza depositada en nosotros. A continuación, te invitamos a participar de nuestra encuesta de satisfacción en la atención a tu reclamo <a href="{{route('encuesta.cliente', $solicitud->id)}}">Dar clic aquí.</a>   
</td>   
</tr>
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

<table width="100%" class="cuerpo mt">
<tr>
<td class="color-lead ">N° de caso:</td>
<td class="color-lead me">{{$solicitud->codigo_generado}}</td>
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
<td class="color-lead ">Sede:</td>
<td class="color-lead me">{{ $solicitud->sede->name}}</td> 
</tr>
<tr>
<td class="color-lead ">Tipo de Novedad:</td>
<td class="color-lead me">{{ $solicitud->tipo_reclamo->name}}</td> 
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

</table>
@endcomponent