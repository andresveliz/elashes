@extends('templates.blank')

@section('content')
<script type="application/javascript">
    $(document).ready(function(){
            
                $("#operadora").change(function(){
                    
                    //$("#hoja").val("");
                    $("#frm-ope").submit();
                })
                
                
            });
</script>

<h3 align="center">Servicios E-lashes</h3>
<div class="row">
	
{!! Form::open(['route'=>'reportes.operador','method'=>'GET', 'class'=>'form-search','id'=>'frm-ope']) !!}
        
    <div class="form-group">
    <div class="col-sm-6">
        {!!Form::select('operador',$operadores,null,['class'=>'col-xs-10 col-sm-8','placeholder'=>'Seleccione un operador','id'=>'operadora']) !!}
            </div>
        </div>
    
        <div class="col-sm-6">
        {!!Form::date('fecha',Date::now(),['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'hora']) !!}
        </div>
        </div>
        <button type="submit">Calcular</button>
    
{!!Form::close() !!}
    <table class="table table-light table-hover">
        <thead>
            <th>Nro</th>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Servicio</th>
            <th>Comision</th>
            <th>Operador/s</th>
            
            

            

        </thead>

        <tbody>
            <br>@php $n=0 @endphp
                @php $suma=0; @endphp
                @php $extra=0; @endphp
                @php $porcentaje=0; @endphp
                @php $total=0; @endphp
            @foreach($trabajo as $ser)
            <tr>@php $n=$n+1; @endphp
                <td>{{$n}}</td>
                <td>{{ $ser->codigo }}</td>
                <td>{{ $ser->nombre }} {{$ser->apellido}}</td>
                <td>{{ $ser->fecha }}</td>
                <td>{{$ser->hora}}</td>
                <td>{{ $ser->servicio->nombre }}</td>
                <td>{{$ser->servicio->comision}}</td>
                <td>{{ $ser->operador->nombre }}</td>
                <td>{{ $ser->servicio->categoria->id}}</td>
                
                
                </td>
                
                 
    
            </tr>
            
            @php $suma +=$ser->servicio->comision; @endphp
            @if($ser->servicio->categoria->id == 1)
            @php $extra +=$ser->servicio->categoria->id; @endphp
            @endif
            @endforeach


        </tbody>


    </table>
<div style="font-size: 20px;">
@if($extra > 5)
@php $porcentaje = ($extra*30)*0.3 @endphp
@endif
@php $total=$suma+$porcentaje; @endphp
<strong>Extensiones de pestanias colocadas: </strong> {{$extra}}<br>
<strong>Porcentaje: </strong>{{$porcentaje}}<br>
<strong>Comision: </strong>{{$suma}}<br>
<strong>Vitaminas vendidas: </strong><br>
<strong>Total: </strong>{{$total}}


    
</div>




@endsection