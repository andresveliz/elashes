@extends('templates.blank')

@section('content')
<h3 align="center">Ventas E-lashes</h3>
<div class="row">
	
{!! Form::open(['route'=>'ventas.index','method'=>'GET', 'class'=>'form-search']) !!}
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-check"></i>
            </span>

            <input type="text" class="form-control search-query" name="busca" placeholder="Ingresa el servicio a buscar" />
                <span class="input-group-btn">
                <button type="submit" class="btn btn-inverse btn-white">
                <span class="ace-icon fa fa-search icon-on-right bigger-110"></span>
                Buscar
                </button>
                </span>
    </div>
{!!Form::close() !!}
    <table class="table table-light table-hover">
        <thead>
            <th>Cod</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Descuento</th>
            <th>Fecha</th>
            <th>Usuario</th>
            <th>Accion</th>
            

        </thead>

        <tbody>
            <br>
            @foreach($ventas as $ser)
            <tr>

                <td>{{ $ser->id }}</td>
                <td>{{ $ser->producto->nombre }}</td>
                <td>{{ $ser->precio }}</td>
                <td>{{ $ser->descuento }}</td>
                <td>{{ $ser->fecha }}</td>
                <td>{{ $ser->operador->nombre }}</td>
                
                <td><a href="{{ route('ventas.edit',$ser->id) }}" class="btn btn-success btn-xs">Editar</a></td>
                
                 
    
            </tr>
            @endforeach


        </tbody>


    </table>
</div>


{{$ventas->links()}}

@endsection