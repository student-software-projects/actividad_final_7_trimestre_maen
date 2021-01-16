<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propietario', function (Blueprint $table) {
            $table->id();
            $table->string('Numero_de_Cedula',20);
            $table->string('Primer_de_Nombre',45);
            $table->string('Segundo_de_Nombre',45);
            $table->string('Primer_Apellido',45);
            $table->string('Segundo_Apellido',45);
            $table->string('Dirección',50);
            $table->string('Telefono',20);
            $table->string('Ciudad',20);
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
        Schema::dropIfExists('propietario');
    }
}
