<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = ['nombre','descripcion'];

    public function producto()
    {
    	return $this->belongsTo('App\Producto');
    }
}
