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
        'Numero de Cedula','Primer de Nombre','Segundo de Nombre','Primer Apellido','Segundo Apellido','Dirección','Telefono','Ciudad'
    ];
}
