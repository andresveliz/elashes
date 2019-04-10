<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = "reservas";

    protected $fillable = ['nombre','apellido','celular','fecha', 'hora' ,'detalle','estado'];

     public function servicio()
    {
    	return $this->hasOne('App\Servicio','id','id_servicio');
    }
}
