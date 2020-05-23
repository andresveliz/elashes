@extends('templates.blank')

@section('content')
<h3 align="center">Trabajos realizados E-Lashes</h3>
<div class="row">
	
{!! Form::open(['route'=>'trabajos.index','method'=>'GET', 'class'=>'form-search']) !!}
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-check"></i>
            </span>

            <input type="text" class="form-control search-query" name="busca" placeholder="Ingresa el numero, o nombre del cliente a buscar" />
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
            <th>Celular</th>
            <th>Fecha</th>
            <th>Servicio</th>
            <th>Operador/s</th>
            <th>Observacion</th>
            <th>Accion</th>

            

        </thead>

        <tbody>
            <br>
            @foreach($trabajos as $ser)
            <tr>

                <td>{{ $ser->codigo }}</td>
                <td>{{ $ser->nombre }} {{$ser->apellido}}</td>
                <td>{{ $ser->celular }}</td>
                <td>{{ $ser->fecha }}/{{$ser->hora}}</td>
                <td>{{ $ser->servicio->nombre }}</td>
                <td>{{ $ser->operador->nombre }}</td>
                <td>{{ $ser->observacion }}</td>
                
                <td><a href="{{ route('trabajos.edit',$ser->id) }}" class="btn btn-success btn-xs">Editar</a></td>
                
                 
    
            </tr>
            @endforeach


        </tbody>


    </table>
</div>


{{$trabajos->links()}}

@endsection