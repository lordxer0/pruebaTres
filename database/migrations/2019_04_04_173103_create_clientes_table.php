<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('cli_cedula');
            $table->unsignedInteger('tdoc_codigo');
            $table->string('cli_nombre');
            $table->string('cli_direccion');
            $table->integer('cli_telefono');
            $table->string('cli_mail');
            $table->timestamps();

            $table->primary('cli_cedula');

            $table->foreign('tdoc_codigo')->references('tdoc_codigo')->on('tipo_documentos');


        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
