@extends('templates.blank')

@section('content')
<h3 align="center">Operadores E-lashes</h3>
<div class="row">
	

    <table class="table table-light table-hover">
        <thead>
            <th>Nro</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>C.I.</th>
            <th>Celular</th>
            <th>Direccion</th>
            <th>Accion</th>
            

        </thead>

        <tbody>
            <br>
            @foreach($operadores as $ser)
            <tr>

                <td>{{ $ser->id }}</td>
                <td>{{ $ser->nombre }}</td>
                <td>{{ $ser->apellido }}</td>
                <td>{{ $ser->ci }}</td>
                <td>{{ $ser->celular }}</td>
                <td>{{ $ser->direccion }}</td>
                
                <td><a href="{{ route('trabajadores.edit',$ser->id) }}" class="btn btn-xs btn-success ">Editar</a>
                <a href="{{ route('trabajadores.destroy',$ser->id) }}" class="btn btn-xs btn-success ">Eliminar</a></td>
                
            </tr>
            @endforeach


        </tbody>


    </table>
</div>




@endsection