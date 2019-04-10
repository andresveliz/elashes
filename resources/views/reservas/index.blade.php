@extends('templates.blank')

@section('content')

<div class="row">
	<div class="col"></div>
	<div class="col-7"><div id="calendario"></div> </div>
	<div class="col"></div>
</div>



<link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}">
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/fullcalendar.js')}}"></script>


<script src="{{asset('assets/js/locale-all.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script>
	$(document).ready(function(){
        $("#btnModificar").click(function(){
            var id= $("#id").html();
            location.href = "reservas/"+id+"/edit";
            

        })
         $("#btnConfirmar").click(function(){
            var id= $("#id").html();
            location.href = "reservas/confirmar/"+id;
            

        })
         $("#btnEliminar").click(function(){
            var id = $("#id").html();
            $("#confirmar").modal();
         })

         $("#btnDelete").click(function(){
            var id= $("#id").html();
            //alert(id);
            location.href = "reservas/"+id+"/destroy";
         })
            

		$('#calendario').fullCalendar({
            height:600,
            minTime:{
                Duration:"08:00:00"
            },
            
            defaultView:'agendaWeek',
            slotLabelFormat: 'h:mm a',
            
           
			header:{
				left:'today,prev,next',
				center:'title',
				right:'month,agendaWeek,agendaDay'
			},

		dayClick:function(date,jsEvent,view){
				
				
                $("#txtfecha").val(date.format());
				$("#exampleModal").modal();
			},	
            eventSources:[{

                
                events:[
                
                @foreach($reservas as $res)
               
                {
                    title: '{{$res->nombre}}'+' '+'{{$res->apellido}}',
                    id: '{{$res->id}}',
                    servicio: '{{$res->servicio->nombre}}',
                    celular: '{{$res->celular}}',
                    detalle: '{{$res->detalle}}',
                    fecha: '{{$res->fecha}}'+' '+'{{$res->hora}}',
                    start: '{{$res->fecha}}'+' '+'{{$res->hora}}',
                    end: '{{$res->fecha}}'+' '+'{{$res->hora+1}}',
                    color: '{{$res->servicio->categoria->color}}',
                                             
                },
                @endforeach
                ],
                
                
            
                
            }],
			


        eventClick: function(calEvent,jsEvent,view){
            $("#id").html(calEvent.id);
            $("#servicio").html(calEvent.servicio);
            $("#title").html(calEvent.title);
            $("#celular").html(calEvent.celular);
            $("#start").html(calEvent.fecha);
            $("#detalle").html(calEvent.detalle);
            $("#mostrarModal").modal();
        }
              
		});

		
	});


</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reserva E-lashes</h5>
        
      </div>
      <div class="modal-body">
        {!!Form::open(array('action'=>['ReservasController@store'],'method'=>'POST','id'=>'reserva','class'=>'form-horizontal')) !!}
        <div class="form-group">
        	{!!Form::label('Nombre','Nombre cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
        	<div class="col-sm-9">
        	{!!Form::text('nombre',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'nombre']) !!}
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
        	{!!Form::label('Detalle','Detalle:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
        	<div class="col-sm-9">
        	{!!Form::textarea('detalle',null,['rows'=>'5', 'class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Detalle de la reserva']) !!}
        	</div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Realizar reserva</button>
      </div>
      {!!Form::close() !!}


    </div>
  </div>
</div>

<!-- Modal mostrar-->
<div class="modal fade" id="mostrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <strong><h5 class="modal-title" id="servicio" align="center"></h5></strong><label id="id"></label>
        
      </div>
      <div class="modal-body">
        {!!Form::open(array('action'=>['ReservasController@index'],'method'=>'GET','id'=>'reserva','class'=>'form-horizontal')) !!}
        
        
        
       <div class="form-group">
            {!!Form::label('Nombre','Nombre cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::label('nombre',null,['class'=>'col-xs-10 col-sm-8','id'=>'title']) !!}
            </div>
        </div>
       
        <div class="form-group">
            {!!Form::label('Celular','Celular:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::label('celular',null,['class'=>'col-xs-10 col-sm-8','id'=>'celular']) !!}
            </div>
        </div>
        
         <div class="form-group">
            {!!Form::label('Fecha','Fecha:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::label('start',null,['class'=>'col-xs-10 col-sm-8','id'=>'start']) !!}
            </div>
        </div>
        
        <div class="form-group">
            {!!Form::label('Detalle','Detalle:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::label('detalle',null,['class'=>'col-xs-10 col-sm-8','id'=>'detalle']) !!}
            </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btnEliminar"><i class="menu-icon fa fa-trash"></i>Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnConfirmar">Confirmar</button>
         <button type="button" class="btn btn-success" id="btnModificar">Modificar</button>        
      </div>
      {!!Form::close() !!}


    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="confirmar">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Reserva</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Esta seguro que desea eliminar la reserva?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="btnDelete">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>

@endsection