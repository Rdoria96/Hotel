<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_habitaciones');
            $table->unsignedBigInteger('id_hotel_sedes');
            $table->string('forma_pago',256)->nullable();
            $table->string('comentario',256)->nullable();
            $table->date('fecha_reserva')->nullable();

            $table->foreign('id_users')->references('id')->on('users'); 
            $table->foreign('id_habitaciones')->references('id')->on('habitaciones'); 
            $table->foreign('id_hotel_sedes')->references('id')->on('hotel_sedes'); 


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
        Schema::dropIfExists('reservas');
    }
}
