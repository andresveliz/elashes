@extends('templates.blank')

@section('content')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){

            $("#prueba").click(function(){
                /*$("#formulario").hide();
                $("#loading").show(3000);
                $("#loading").hide(2000);
               setTimeout("$('#imprimir_ticket')[0].click()",5000);*/

            });
       $("#trabajo").submit(function(){
            $("#formulario").hide();
            $("#loading").show(3000);
            $("#loading").hide(3000);
            $('#imprimir_ticket')[0].click();
        });
        
        $("#guardar").click(function(){
             $(".error").remove();
                if ($("#nombre").val() == "" ) {
                    $("#nombre").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else if ($("#apellido").val() == "" ) {
                    $("#apellido").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else if ($("#celular").val() == "" ) {
                    $("#celular").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else if ($("#servicio").val() == "" ) {
                    $("#servicio").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else if ($("#fecha").val() == "" ) {
                    $("#fecha").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else if ($("#hora").val() == "" ) {
                    $("#hora").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else if ($("#operador").val() == "" ) {
                    $("#operador").focus().after(" <span class='error'>Completa este Campo </span>");
                    return false;   
                }
                else{
                    
                    //var u=$('#suj_pa').attr('action');
                    //var d=$('#suj_pa').serialize()
                    $.ajax({
                    
                    type: $('#trabajo').attr('method'),
                    url: $('#trabajo').attr('action'),
                    data: $('#trabajo').serialize(),
                    success: function (data){
                        
                        $("#formulario").hide();
                        $("#loading").show(3000);
                        $("#loading").hide(3000);
                        setTimeout("$('#imprimir_ticket')[0].click()",2000);
                        
                        setTimeout("location.href= '../trabajos'",3000);

                        ;}
                    
                    
                     });
                };
        })
        
            
        
    });
</script>

<h3 align="center">Nuevo Codigo</h3>
<div class="row">
    <div id="loading" align="center" hidden=""><img src="{{asset('/assets/images/tenor.gif')}}" width="200">
</div>
<div id="formulario">
{!!Form::open(array('action'=>'TrabajosController@store','method'=>'POST','id'=>'trabajo','class'=>'form-horizontal')) !!}
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
            {!!Form::text('celular',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el celular','required','id'=>'celular']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Servicio','Servicio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('servicio',$servicios,null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el servicio','required','id'=>'servicio']) !!}
            </div>
        </div>
         <div class="form-group">
            {!!Form::label('Fecha','Fecha:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::date('fecha',Date::now(),['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'txtfecha','id'=>'fecha']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Hora','Hora:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::time('hora',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el nombre','required','id'=>'hora']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Servicio','Operador/a:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('trabajador',$operador,null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el operador','required','id'=>'operador']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Detalle/','Detalle/Observaciones:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::textarea('detalle',null,['rows'=>'3', 'class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Detalles']) !!}
            </div>
        </div>
         <div class="form-group">
            {!!Form::label('codigo','Codigo:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('codigo',Date::now()->format('F').'-'.$largo,['class'=>'col-xs-10 col-sm-8','required','readonly']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('codigo','Codigo:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('print',$print,['class'=>'col-xs-10 col-sm-8','required','readonly']) !!}
            </div>
        </div>
        <div class="form-footer" align="center">
        <a href="{{route('trabajos.index')}}" class="btn btn-danger" data-dismiss="modal">Cancelar</a> 
        
        <button type="button" class="btn btn-success" id="guardar">Guardar</button>
      </div>

        {!!Form::close() !!}
</div>	

<div  id="ticket" hidden="">  
<a href="{{ route('reportes.ticket',Date::now()->format('F').'-'.$largo) }}" target="_blank" class="btn btn-success btn-xs" id="imprimir_ticket">personal</a>
</div>



</div>

<button hidden="" id="prueba">prueba</button>


@endsection