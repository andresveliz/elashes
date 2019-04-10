<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_servicio extends Model
{
    protected $table = "categorias_servicios";

    protected $fillable = ['nombre'];

    public function servicio()
    {
    	return $this->belongsTo('App\Servicio');
    }
}
