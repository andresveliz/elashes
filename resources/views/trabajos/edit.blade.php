@extends('templates.blank')

@section('content')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>


<h3 align="center">Editar Trabajo</h3>
<div class="row">
   
<div id="formulario">
{!!Form::open(['route'=>['trabajos.update',$trabajo],'method'=>'PUT','class'=>'form-horizontal']) !!}
         <div class="form-group">
            {!!Form::label('Nombre','Nombre cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('nombre',$trabajo->nombre,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'nombre']) !!}
            </div>
        </div>
       <div class="form-group">
            {!!Form::label('Apellido','Apellido cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('apellido',$trabajo->apellido,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el apellido','required','id'=>'apellido']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Celular','Celular:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('celular',$trabajo->celular,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el celular','required','id'=>'celular']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Servicio','Servicio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('servicio',$servicios,$trabajo->id_servicio,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el servicio','required','id'=>'servicio']) !!}
            </div>
        </div>
         <div class="form-group">
            {!!Form::label('Fecha','Fecha:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::date('fecha',$trabajo->fecha,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'txtfecha','id'=>'fecha']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Hora','Hora:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::time('hora',$trabajo->hora,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'hora']) !!}
            </div>
        </div>
        
        <div class="form-group">
            {!!Form::label('Detalle/','Detalle/Observaciones:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::textarea('detalle',$trabajo->detalle,['rows'=>'3', 'class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Detalles']) !!}
            </div>
        </div>

        <div class="form-group">
            {!!Form::label('Trabajador','Operador:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('trabajador',$trabajadores,$trabajo->id_trabajador,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el servicio','required','id'=>'servicio']) !!}
            </div>
        </div>

         
        
        <div class="form-footer" align="center">
        <a href="{{route('trabajos.index')}}" class="btn btn-danger" >Cancelar</a> 
        
        <button type="submit" class="btn btn-success" id="guardar">Guardar cambios</button>
      </div>

        {!!Form::close() !!}
</div>	





</div>

<button hidden="" id="prueba">prueba</button>


@endsection