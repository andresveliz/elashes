<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->double('precio');
            $table->integer('descuento');

            $table->integer('id_producto')->unsigned();
            $table->integer('id_trabajador')->unsigned();

            $table->foreign('id_producto')->references('id')->on('productos')->onUpdate('cascade');
            $table->foreign('id_trabajador')->references('id')->on('trabajadores')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
