<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductores extends Model
{
    use HasFactory;
    protected $table='Conductores';
    protected $primaryKey='id';
    protected $fillable=[
        'Numero de Cedula','Primer de Nombre','Segundo de Nombre','Primer Apellido','Segundo Apellido','Dirección','Telefono','Ciudad'
    ];
}
