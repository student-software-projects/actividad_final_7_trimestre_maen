<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropietarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propietario')->insert(['Numero_de_Cedula'=>"101429384",'Primer_de_Nombre'=>"angel",'Segundo_de_Nombre'=>"daniel",'Primer_Apellido'=>"sanchez",'Segundo_Apellido'=>"castillo",'Dirección'=>"calle falsa123",'Telefono'=>394873,'Ciudad'=>"bogota"]);
        DB::table('propietario')->insert(['Numero_de_Cedula'=>"101498894",'Primer_de_Nombre'=>"John",'Segundo_de_Nombre'=>"fredy",'Primer_Apellido'=>"sanchez",'Segundo_Apellido'=>"Gonzales",'Dirección'=>"calle calabera 123",'Telefono'=>394873,'Ciudad'=>"Medellin"]);

    }
}
