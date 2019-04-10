<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = "ventas";

    protected $fillable = ['fecha','precio','descuento','id_producto','id_trabajador'];

    public function operador()
    {
    	return $this->hasOne('App\Trabajador','id','id_trabajador');
    }
    public function producto()
    {
    	return $this->hasOne('App\Producto','id','id_producto');
    }

    public function scopeBusqueda($query, $request)
    {
        
       // dd("scope: ",$busca);
        return $query->where('id_producto','LIKE',"%".$request."%");
                     
    }
}
