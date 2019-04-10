<div col-sm-5>
<div style="margin-left: 40px">
<img src="{{asset('/assets/images/e5.jpg')}}" width="80">
</div>
<form class="form-horizontal inline">
	<div class="form-group">
            
    <strong>{!!Form::label('nombre',$trabajo->codigo,['class'=>'col-xs-10 col-sm-8']) !!}</strong>
        
	</div>
	<div class="form-group">
    <strong>{!!Form::label('Nombre','Nombre cliente:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}</strong>
        
    {!!Form::label('nombre',$trabajo->nombre.' '.$trabajo->apellido,['class'=>'col-xs-10 col-sm-8']) !!}
        
	</div>
	<div class="form-group">
    <strong>{!!Form::label('Nombre','Servicio:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}</strong>
        
    {!!Form::label('nombre',$trabajo->servicio->nombre,['class'=>'col-xs-10 col-sm-8']) !!}
        
	</div>
	<div class="form-group">
    <strong>{!!Form::label('Nombre','Fecha/hora:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}</strong>
        
    {!!Form::label('nombre',$trabajo->fecha.' / '.$trabajo->hora,['class'=>'col-xs-10 col-sm-8']) !!}
        
	</div>
	<div class="form-group">
    <strong>{!!Form::label('Nombre','Operador/a:',['class'=>'col-sm-3 control-label no-padding-right'] ) !!}</strong>
        
    {!!Form::label('nombre',$trabajo->operador->nombre,['class'=>'col-xs-10 col-sm-8']) !!}
        
	</div>
</form>
</div>