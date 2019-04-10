@extends('templates.blank')

@section('content')
<h3 align="center">Nuevo Servicio E-lashes</h3>
<div class="row">
	{!!Form::open(['route'=>'servicios.store','method'=>'POST','id'=>'servicio','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!!Form::label('Nombre','Nombre:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('nombre',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Categoria','Categoria:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('id_categoria_servicio',$categoria,null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione la categoria','required']) !!}
            </div>
        </div>
       <div class="form-group">
            {!!Form::label('costo','Precio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('costo',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el precio del servicio','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('descripcion','Descripcion:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('descripcion',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese la descripcion','required']) !!}
            </div>
        </div>
        
       
        <div class="form-group">
            {!!Form::label('descuento','Descuento:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('descuento',null,[ 'class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el descuento del producto (opcional)']) !!}
            </div>
        </div>
        <div class="form-group" align="center">
            {!!Form::submit('Agregar servicio',['class'=>'btn btn-success']) !!}
            {!!Form::button('Cancelar',['class'=>'btn btn-danger']) !!}
        </div>
        {!!Form::close() !!}
</div>




      
        
     
      
@endsection