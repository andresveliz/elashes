@extends('templates.blank')

@section('content')
<h3 align="center">Nuevo Producto E-lashes</h3>
<div class="row">
	{!!Form::open(['route'=>['productos.update',$producto],'method'=>'PUT','id'=>'servicio','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!!Form::label('Nombre','Nombre:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('nombre',$producto->nombre,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Categoria','Categoria:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('categoria',$categoria,$producto->id_categoria,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione la categoria','required']) !!}
            </div>
        </div>
       <div class="form-group">
            {!!Form::label('costo','Precio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('valor',$producto->valor,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el precio del producto','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('cantidad','Cantidad:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::number('cantidad',$producto->cantidad,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese la cantidad','required']) !!}
            </div>
        </div>
        
        <div class="form-group" align="center">
            
        <a href="{{route('productos.index')}}" class="btn btn-danger" >Cancelar</a> 
            {!!Form::submit('Guardar',['class'=>'btn btn-success']) !!}
        </div>
        {!!Form::close() !!}
</div>




      
        
     
      
@endsection