@extends('templates.blank')

@section('content')
<h3 align="center">Nuevo Producto E-lashes</h3>
<div class="row">
	{!!Form::open(['route'=>'productos.store','method'=>'POST','id'=>'servicio','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!!Form::label('Nombre','Nombre:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('nombre',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Categoria','Categoria:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('categoria',$categoria,null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione la categoria','required']) !!}
            </div>
        </div>
       <div class="form-group">
            {!!Form::label('costo','Precio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('valor',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el precio del producto','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('cantidad','Cantidad:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('cantidad',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese la cantidad','required']) !!}
            </div>
        </div>
        
        <div class="form-group" align="center">
            
            {!!Form::button('Cancelar',['class'=>'btn btn-danger']) !!}
            {!!Form::submit('Agregar producto',['class'=>'btn btn-success']) !!}
        </div>
        {!!Form::close() !!}
</div>




      
        
     
      
@endsection