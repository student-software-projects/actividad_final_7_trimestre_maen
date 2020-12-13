<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->string('Marca',20);
            $table->string('Color',45);
            $table->string('Tipo de Vehiculo',45);
            $table->string('Placa',45);

            //Foreing Key

            $table->bigInteger('Conductor_id')->unsigned();
            $table->bigInteger('Propietario_id')->unsigned();
            $table->foreign('Conductor_id')->references('id')->on('conductores');
            $table->foreign('Propietario_id')->references('id')->on('propietarios');

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
        Schema::dropIfExists('vehiculo');
    }
}
