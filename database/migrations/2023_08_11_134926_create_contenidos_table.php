<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenidos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('resumen');
            $table->string('texto', 60000)->nullable();
            $table->string('portada');
            $table->string('link')->nullable();
            $table->string('archivo')->nullable();
            $table->Integer('estado')->default(1);
            $table->bigInteger('id_subcategoria')->unsigned();
            $table->bigInteger('id_nivel')->unsigned();
            $table->bigInteger('id_formato')->unsigned();
            
            $table->bigInteger('id_autor')->unsigned();
            $table->bigInteger('id_contribuyente')->unsigned()->nullable();
            $table->bigInteger('id_licencia')->unsigned();

            $table->timestamps();
            $table->foreign('id_subcategoria')->references('id')->on('subcategorias');
            $table->foreign('id_nivel')->references('id')->on('nivels');
            $table->foreign('id_formato')->references('id')->on('formatos');
         
            $table->foreign('id_autor')->references('id')->on('autorxes');
            $table->foreign('id_contribuyente')->references('id')->on('contribuyentes');
            $table->foreign('id_licencia')->references('id')->on('licencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenidos');
    }
}
