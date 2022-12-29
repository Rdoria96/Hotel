<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcomodacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acomodaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50) ->unique();
            $table->string('descripcion',256)->nullable();
            $table->boolean('condicion')->default(1); 

        });

        DB::table('acomodaciones')->insert(array('id'=>'1','nombre'=>'TRIPLE','descripcion'=>'acomodaciones'));
        DB::table('acomodaciones')->insert(array('id'=>'2','nombre'=>'DOBLE','descripcion'=>'acomodaciones'));
        DB::table('acomodaciones')->insert(array('id'=>'3','nombre'=>'SENCILLA','descripcion'=>'acomodaciones'));
        DB::table('acomodaciones')->insert(array('id'=>'4','nombre'=>'CUADRUPLE','descripcion'=>'acomodaciones'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acomodaciones');
    }
}
