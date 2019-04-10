<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Trabajo extends Model
{
    protected $table = "trabajos";

	protected $fillable = ['nombre','apellido','celular','fecha', 'hora' ,'observacion','numero','codigo','id_servicio','id_trabajador'];

	public function servicio()
    {
    	return $this->hasOne('App\Servicio','id','id_servicio');
    }

    public function operador()
    {
    	return $this->hasOne('App\Trabajador','id','id_trabajador');
    }

     public function scopeBusqueda($query, $request)
    {
        
       // dd("scope: ",$busca);
        return $query->where('nombre','LIKE',"%".$request."%")
        			 ->orWhere('apellido','like','%'.$request.'%')
        			 ->orWhere('celular','like','%'.$request.'%');

                     
    }

    public function scopeComision($query, $operador,$fecha)
    {
        return $query->where('id_trabajador','=',$operador)
                     ->where('fecha','=',$fecha);
    }

    public function scopeDiario($query, $fecha)
    {
        return $query->where('fecha','=',$fecha);
    }

    public function scopeCuenta($query,$fecha)
    {
        return $query->select(array('*',DB::raw('count(*) as cantidad')))
                     ->where('fecha',$fecha)
                     ->groupBy('id_trabajador')
                     ->get();
                     
    }

    public function scopePestanias($query, $fecha)
    {
        
       // dd("scope: ",$busca);
        return $query->join('servicios','servicios.id','=','trabajos.id_servicio')
                    ->select(array('*',DB::raw('count(*) as cantidad')))
                    ->where('servicios.id_categoria_servicio','=','1')
                    ->orWhere('servicios.id_categoria_servicio','=','5')
                    ->where('trabajos.fecha','=',$fecha)
                    ->groupBy('id_trabajador')
                    ->get();
                     
    }

    public function scopeTodo($query,$fecha)
    {
        return $query->where('fecha','=',$fecha);
    }

}
