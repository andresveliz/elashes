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

<h3 align="center">Reporte Diario E-lashes</h3>
<div class="row">

    
{!! Form::open(['route'=>'reportes.diario','method'=>'GET', 'class'=>'form-search','id'=>'frm-ope']) !!}
        
    <div class="form-group">
    <div class="col-sm-6">
        {!!Form::select('operador',$operadores,null,['class'=>'col-xs-10 col-sm-8','placeholder'=>'Seleccione un operador','id'=>'operadora']) !!}
            </div>
        </div>
    
        <div class="col-sm-6">
        {!!Form::date('fecha',Date::now(),['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'hora']) !!}
        </div>
        </div>
        <button type="submit">ok</button>
    
{!!Form::close() !!}

        
        
@php $x = array() @endphp
@foreach($operadores as $ope)
<div class="col-sm-12">
    <div class="widget-box transparent">
        <div class="widget-header widget-header-flat">
            <h4 class="widget-title lighter">
            <i class="ace-icon fa fa-user"></i>
            Detalle de operador/a {{$ope->nombre}}
            </h4>

        <div class="widget-toolbar" >
            <a href="#" data-action="collapse" >
            <i class="ace-icon fa fa-chevron-up"></i>
            </a>
        </div>
        </div>

        <div class="widget-body" >
    <div>
    <table class="table table-light table-hover dropdown"  >
        <thead>
            <th>Nro</th>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Servicio</th>
            <th>Comision</th>
            <th>Operador/a</th>
            
            
            

            

        </thead>
                
        <tbody>
            <br>@php $n=0 @endphp
                @php $suma=0; @endphp
                @php $extra=0; @endphp
                @php $porcentaje=0; @endphp
                @php $total=0; @endphp

            @foreach($trabajo as $ser)
            @if($ser->id_trabajador ==$ope->id)
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
             @endif
            @endforeach
            


        </tbody>
            

    </table>
    <div style="font-size: 15px;">
@if($extra > 5)
@php $porcentaje = ($extra*30)*0.3 @endphp
@endif
@php $total=$suma+$porcentaje; @endphp
<strong>Extensiones de pestanias colocadas: </strong> {{$extra}}<br>
<strong>Porcentaje: </strong>{{$porcentaje}}<br>
<strong>Comision: </strong>{{$suma}}<br>
<strong>Vitaminas vendidas: </strong><br>
<strong>Total: </strong>{{$total}}


    @php $x[]=$total;  @endphp
</div>
    </div>

</div><!-- /.widget-body -->
    </div><!-- /.widget-box -->
</div><!-- /.col -->
    @endforeach
    


<div>
    <table class="table table-light table-hover">
        <thead>
            <th>Nro</th>
            <th>Cod</th>
            <th>Nombre</th>
            <th>Fecha</th>
            <th>Servicio</th>
            <th>Comision</th>
            <th>Operador/s</th>
            <th>Caja</th>
            
            

            

        </thead>

        <tbody>
            <br>@php $n=0 @endphp
                @php $sumado=0; @endphp
                
                @php $total=0; @endphp
            @foreach($trabajo as $ser)
            <tr>@php $n=$n+1; @endphp
                <td>{{$n}}</td>
                <td>{{ $ser->codigo }}</td>
                <td>{{ $ser->nombre }} {{$ser->apellido}}</td>
                <td>{{ $ser->fecha }}</td>
                <td>{{ $ser->servicio->nombre }}</td>
                <td>{{$ser->servicio->comision}}</td>
                <td>{{ $ser->operador->nombre }}</td>
                <td>{{ $ser->servicio->categoria->id}}</td>
                <td>{{$ser->servicio->costo}}</td>
                
                </td>
                
                 
    
            </tr>
            
            @php $sumado +=($ser->servicio->costo); @endphp
           
            @endforeach


        </tbody>


    </table>
</div>
 @php $su=0 @endphp
 @foreach($x as $x)

@php $su += $x @endphp

 @endforeach

@php $caja = $sumado-$su; @endphp
<div style="font-size: 25px;">



<strong>Total en caja: </strong>{{$caja}} Bs.


    
</div>
@endsection