<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTrabajos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('observacion');
            $table->string('codigo',10);

            $table->integer('id_servicio')->unsigned();
            $table->integer('id_trabajador')->unsigned();
            $table->integer('id_cliente')->unsigned();

            $table->foreign('id_servicio')->references('id')->on('servicios')->onUpdate('cascade');
            $table->foreign('id_trabajador')->references('id')->on('trabajadores')->onUpdate('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onUpdate('cascade');
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
        Schema::drop('trabajos');
    }
}
