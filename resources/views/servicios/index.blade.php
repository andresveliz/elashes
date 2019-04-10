@extends('templates.blank')

@section('content')
<h3 align="center">Servicios E-lashes</h3>
<div class="row">
	
{!! Form::open(['route'=>'servicios.index','method'=>'GET', 'class'=>'form-search']) !!}
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
            <th>Nombre</th>
            <th>Precio</th>
            <th>Descripcion</th>
            <th>Descuento</th>
            <th>Accion</th>
            

        </thead>

        <tbody>
            <br>
            @foreach($servicio as $ser)
            <tr>

                <td>{{ $ser->id }}</td>
                <td>{{ $ser->nombre }}</td>
                <td>{{ $ser->costo }}</td>
                <td>{{ $ser->descripcion }}</td>
                <td>{{ $ser->descuento }}</td>
                
                <td><a href="{{ route('servicios.edit',$ser->id) }}" class="btn btn-success btn-xs">Editar</a></td>
                
                 
    
            </tr>
            @endforeach


        </tbody>


    </table>
</div>


{{$servicio->links()}}

@endsection