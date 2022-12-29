<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelSedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_sedes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_hotel');
            $table->string('nit',50) ->unique();
            $table->string('nombre_sede',256)->nullable();
            $table->string('capacidad',256)->nullable();
            $table->string('ciudad',256)->nullable();
            $table->string('direccion',256)->nullable();
            $table->string('latitud',256)->nullable();
            $table->string('longitud',256)->nullable();
            $table->string('foto',256)->nullable();
            $table->timestamps();
            $table->foreign('id_hotel')->references('id')->on('hotel'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_sedes');
    }
}
