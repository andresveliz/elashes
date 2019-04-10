<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicios";

    protected $fillable = ['nombre','costo','descripcion','descuento','id_categoria_servicio'];

    public function scopeBusqueda($query, $request)
    {
        
       // dd("scope: ",$busca);
        return $query->where('nombre','LIKE',"%".$request."%");
                     
    }
    public function categoria()
    {
    	return $this->hasOne('App\Categoria_servicio','id','id_categoria_servicio');
    }
}
