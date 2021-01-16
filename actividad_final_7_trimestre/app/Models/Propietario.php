<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;
    protected $table='propietario';
    protected $primaryKey='id';
    protected $fillable=[
        'Numero_de_Cedula','Primer_de_Nombre','Segundo_de_Nombre','Primer_Apellido','Segundo_Apellido','Dirección','Telefono','Ciudad'
    ];
}
