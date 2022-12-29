<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',50) ->unique();
            $table->string('descripcion',256)->nullable();
            $table->boolean('condicion')->default(1); 

        });

        DB::table('roles')->insert(array('id'=>'1','nombre'=>'Administrador','descripcion'=>'Administradores y asigna usuario a cada uno de los hoteles'));
        DB::table('roles')->insert(array('id'=>'2','nombre'=>'Administrador_Sedes','descripcion'=>'Administra solo el hotel asignado'));
        DB::table('roles')->insert(array('id'=>'3','nombre'=>'Cliente','descripcion'=>'Amacenero del area de compra'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
