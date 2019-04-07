<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetirosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retiros', function (Blueprint $table) {
            $table->increments('ret_codigo');
            $table->integer('ret_valor');
            $table->date('ret_fecha');
            $table->text('ret_descripcion');
            
            $table->primary('ret_codigo');
            
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
        Schema::dropIfExists('retiros');
    }
}
