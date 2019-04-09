<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('usu_cedula');
            $table->unsignedInteger('tusu_codigo');
            $table->string('usu_nombre');
            $table->string('usu_login');
            $table->integer('usu_clave');
            $table->rememberToken();
            
            $table->primary('usu_cedula');
    
            $table->foreign('tusu_codigo')->references('tusu_codigo')->on('tipo_usuarios');
            
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
        Schema::dropIfExists('usuarios');
    }
}
