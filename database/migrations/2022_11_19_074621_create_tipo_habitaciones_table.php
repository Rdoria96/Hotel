<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoHabitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_habitaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50) ->unique();
            $table->string('descripcion',256)->nullable();
            $table->boolean('condicion')->default(1); 

        });

        DB::table('tipo_habitaciones')->insert(array('id'=>'1','nombre'=>'Junior','descripcion'=>'descripcion'));
        DB::table('tipo_habitaciones')->insert(array('id'=>'2','nombre'=>'Estandar','descripcion'=>'descripcion'));
        DB::table('tipo_habitaciones')->insert(array('id'=>'3','nombre'=>'Suite','descripcion'=>'descripcion'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_habitaciones');
    }
}
