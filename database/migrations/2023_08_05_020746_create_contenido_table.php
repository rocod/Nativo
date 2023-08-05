<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenido', function (Blueprint $table) {
            $table->id();
            
            $table->string('titulo');
            $table->string('resumen');
            $table->string('texto');
            $table->string('portada');
            $table->string('link');
            $table->string('archivo');
            $table->bigInteger('id_subcategoria')->unsigned();
            $table->bigInteger('id_nivel')->unsigned();
            $table->bigInteger('id_formato')->unsigned();
            $table->bigInteger('id_etiqueta')->unsigned();
            $table->bigInteger('id_autor')->unsigned();
            $table->bigInteger('id_contribuyente')->unsigned();
            $table->bigInteger('id_licencia')->unsigned();

            $table->timestamps();
            $table->foreign('id_subcategoria')->references('id')->on('subcategoria');
            $table->foreign('id_nivel')->references('id')->on('nivel');
            $table->foreign('id_formato')->references('id')->on('formato');
            $table->foreign('id_etiqueta')->references('id')->on('etiqueta');
            $table->foreign('id_autor')->references('id')->on('autor');
            $table->foreign('id_contribuyente')->references('id')->on('autor');
            $table->foreign('id_licencia')->references('id')->on('licencia');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contenido');
    }
}
