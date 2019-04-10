@extends('templates.blank')

@section('content')
<h3 align="center">Productos E-lashes</h3>
<div class="row">
	
{!! Form::open(['route'=>'productos.index','method'=>'GET', 'class'=>'form-search']) !!}
        <div class="input-group">
            <span class="input-group-addon">
                <i class="ace-icon fa fa-check"></i>
            </span>

            <input type="text" class="form-control search-query" name="busca" placeholder="Ingresa el producto a buscar" />
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
            <th>Categoria</th>
            <th>Costo</th>
            <th>Cantidad</th>
            <th>Accion</th>
            

        </thead>

        <tbody>
            <br>
            @foreach($producto as $ser)
            <tr>

                <td>{{ $ser->id }}</td>
                <td>{{ $ser->nombre }}</td>
                <td>{{ $ser->categoria->nombre }}</td>
                <td>{{ $ser->valor }}</td>
                <td>{{ $ser->cantidad }}</td>
                
                <td><a href="{{ route('servicios.edit',$ser->id) }}" class="btn btn-xs btn-success ">Editar</a>
                <a href="{{ route('servicios.edit',$ser->id) }}" class="btn btn-xs btn-success ">Recibir</a></td>
                
            </tr>
            @endforeach


        </tbody>


    </table>
</div>


{{$producto->links()}}

@endsection