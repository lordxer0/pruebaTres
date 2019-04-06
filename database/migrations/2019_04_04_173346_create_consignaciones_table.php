<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsignacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {       
        Schema::create('consignaciones', function (Blueprint $table) {
            $table->increments('con_codigo');
            $table->date('con_fecha');
            $table->text('con_descripcion');
            $table->integer('con_valor');
            
            $table->primary('con_codigo');
            
            $table->unsignedInteger('cue_numero');
            $table->integer('usu_cedula');

            $table->foreign('cue_numero')->references('cue_numero')->on('cuentas');
            $table->foreign('usu_cedula')->references('usu_cedula')->on('usuarios');

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
        Schema::dropIfExists('consignaciones');
    }
}
