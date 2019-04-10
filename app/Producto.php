<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = ['nombre','valor','cantidad','id_categoria'];

    public function scopeBusqueda($query, $request)
    {
        
       // dd("scope: ",$busca);
        return $query->where('nombre','LIKE',"%".$request."%");
                     
    }

    public function categoria()
    {
    	return $this->hasOne('App\Categoria','id','id_categoria');
    }
}
