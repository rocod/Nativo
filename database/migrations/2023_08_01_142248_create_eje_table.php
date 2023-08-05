<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eje', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->Integer('estado');         
            //$table->bigInteger('id_bloque')->unsigned();
            $table->timestamps();
           // $table->foreign('id_bloque')->references('id')->on('bloques')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eje');
    }
}
