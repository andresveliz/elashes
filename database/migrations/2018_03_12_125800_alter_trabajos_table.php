<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trabajos', function (Blueprint $table) {
            $table->string('nombre',30)->after('id');
            $table->string('apellido',50)->after('nombre');
            $table->integer('celular')->after('apellido');
            $table->dropForeign('trabajos_id_cliente_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trabajos', function (Blueprint $table) {
            $table->dropColumn('nombre');
            $table->dropColumn('apellido');
            $table->dropColumn('celular');
            $table->foreign('id_cliente')->references('id')->on('clientes');
        });
    }
}
