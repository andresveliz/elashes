@extends('templates.blank')

@section('content')
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
            
                $("#productos_copia").val($("#productos").val());
                    
                $("#precio").val($("#productos_copia option:selected").text());
                $("#productos").change(function(){
                    
                    $("#productos_copia").val($("#productos").val());
                    
                    $("#precio").val($("#productos_copia option:selected").text());
                });

                $("#guardar").click(function(){

                    $(".error").remove();
                     if ($("#productos").val() == "" ) {
                    $("#productos").focus().after(" <span class='error'>Selecciona un producto </span>");
                    return false;   
                    }
                   
                    else if ($("#operador").val() == "" ) {
                    $("#operador").focus().after(" <span class='error'>Selecciona un usuario </span>");
                    return false;   
                    }

                 else{
                    
                    //var u=$('#suj_pa').attr('action');
                    //var d=$('#suj_pa').serialize()
                    $.ajax({
                    
                    type: $('#frmventa').attr('method'),
                    url: $('#frmventa').attr('action'),
                    data: $('#frmventa').serialize(),
                    success: function (data){
                        
                        location.href= '../productos/vendido/'+$("#productos").val();
                        ;}
                    
                    
                     });
                };

                })

              
                
                
            });
</script>

<h3 align="center">Nueva Venta E-lashes</h3>
<div class="row">
	{!!Form::open(array('action'=>'VentasController@store','method'=>'POST','id'=>'frmventa','class'=>'form-horizontal')) !!}
        
        <div class="form-group">
            {!!Form::label('produc','Producto:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('id_producto',$productos,$ventas->id_producto,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el producto','required','id'=>'productos','readonly']) !!}
            </div>
        </div>
        <div class="form-group" hidden="">
            {!!Form::label('Categoria','Producto:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('id_productos',$precio,null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione el producto','required','id'=>'productos_copia']) !!}
            </div>
        </div>
       <div class="form-group">
            {!!Form::label('costo','Precio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('precio',null,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese el precio de venta','required','id'=>'precio','readonly']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('costo','Descuento:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::text('descuento',$ventas->descuento,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Descuento (opcional)']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('cantidad','Fecha:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::date('fecha',Date::now(),['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Ingrese la cantidad','required','id'=>'fecha']) !!}
            </div>
        </div>
        <div class="form-group">
            {!!Form::label('Categoria','Usuario:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}
            <div class="col-sm-9">
            {!!Form::select('id_trabajador',$operadores,$ventas->id_trabajador,['class'=>'col-xs-10 col-sm-8', 'placeholder'=>'Seleccione un usuario','required','id'=>'operador']) !!}
            </div>
        </div>
        
        <div class="form-group" align="center">
            
            <a href="{{route('ventas.index')}}" class="btn btn-danger" >Cancelar</a> 
            {!!Form::button('Guardar',['class'=>'btn btn-success','id'=>'guardar']) !!}
        </div>
        {!!Form::close() !!}
</div>




      
        
     
      
@endsection