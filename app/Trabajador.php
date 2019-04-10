<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table = "trabajadores";

    protected $fillable = ['ci','nombre','apellido','celular','direccion'];
}
