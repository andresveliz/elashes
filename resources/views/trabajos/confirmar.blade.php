@extends('templates.blank')

@section('content')
<h3 align="center">Servicios E-lashes</h3>
<div class="row">
{!!Form::open(['route'=>'trabajos.store','method'=>'POST','id'=>'servicio','class'=>'form-horizontal']) !!}
         <div class="form-group">
            {!!Form::label('Nombre','Nombre cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('nombre','hola',['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'nombre']) !!}
            </div>
        </div>
       <div class="form-group">
            {!!Form::label('Apellido','Apellido cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('apellido',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el apellido','required','id'=>'apellido']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Celular','Celular:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('celular',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el celular','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Servicio','Servicio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('servicio',$servicios,null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el servicio','required']) !!}
            </div>
        </div>
         <div class="form-group">
            {!!Form::label('Fecha','Fecha:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('fecha',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'txtfecha']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Hora','Hora:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::time('hora',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Detalle/','Detalle/Observaciones:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::textarea('detalle',null,['rows'=>'5', 'class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Detalles','required']) !!}
            </div>
        </div>
        {!!Form::close() !!}	

</div>




@endsection