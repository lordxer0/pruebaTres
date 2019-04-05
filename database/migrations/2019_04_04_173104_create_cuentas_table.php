<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {        
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('cue_numero');
            $table->Integer('cli_cedula');
            $table->integer('cue_saldo');
            $table->string('cue_activa');
            $table->integer('cue_clave');
            $table->timestamps();
            
            
            $table->foreign('cli_cedula')->references('cli_cedula')->on('clientes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}
