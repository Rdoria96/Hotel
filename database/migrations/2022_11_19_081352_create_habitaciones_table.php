<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_acomodaciones');
            $table->unsignedBigInteger('id_tipo_habitaciones');
            $table->unsignedBigInteger('id_hotel_sedes');
            $table->decimal('precio',11,2)->nullable();
            $table->integer('numcantidad')->nullable();
            $table->string('foto',256)->nullable();
            $table->timestamps();
            $table->foreign('id_acomodaciones')->references('id')->on('acomodaciones'); 
            $table->foreign('id_tipo_habitaciones')->references('id')->on('tipo_habitaciones'); 
            $table->foreign('id_hotel_sedes')->references('id')->on('hotel_sedes'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habitaciones');
    }
}
