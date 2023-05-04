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

        .ma {
            margin-right: 2px;
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
<td> Atención de <span class="text-titulo">{{$solicitud->tipo_reclamo->name}}</span></td>
</tr>
</table> 
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
<table width="100%" class="cuerpo" >
<tr>
<thead>
<tr>
<th class="color-lead">
Accion
</th>
<th class="color-lead">
 Responsable   
</th>
<th class="color-lead">
 fecha Programada   
</th>
</tr>
</thead>    
<tbody>
<tr>
<td>
@foreach ($solicitud->acciones as $action)
<li class="color-lead">
    {{ $action->name }}
</li>  
@endforeach
</td>
<td>
@foreach ($solicitud->acciones as $actions)    
<li class="color-lead">
    {{ $actions->userse->name }}   
</li> 
@endforeach
</td>
<td>
@foreach ($solicitud->acciones as $actiones)    
<li class="color-lead">
    {{ $actiones->fecha_programacion }}   
</li>
@endforeach  
</td>   
</tr> 
</tbody>
</tr>
</table>
</table>
@endcomponent
