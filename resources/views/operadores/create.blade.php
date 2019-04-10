@extends('templates.blank')

@section('content')
<h3 align="center">Nuevo Operador E-lashes</h3>
<div class="row">
	{!!Form::open(['route'=>'trabajadores.store','method'=>'POST','class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!!Form::label('Nombre','Nombre:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('nombre',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('apellido','Apellido:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('apellido',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el apellido','required']) !!}
            </div>
        </div>
        
       <div class="form-group">
            {!!Form::label('costo','C.I.:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('ci',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el C.I.','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('cantidad','Celular:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('celular',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el celular','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('cantidad','Direccion:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('direccion',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese la direccion','required']) !!}
            </div>
        </div>
        
        <div class="form-group" align="center">
            
            {!!Form::button('Cancelar',['class'=>'btn btn-danger']) !!}
            {!!Form::submit('Agregar operador',['class'=>'btn btn-success']) !!}
        </div>
        {!!Form::close() !!}
</div>




      
        
     
      
@endsection