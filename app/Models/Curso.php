<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* la linea fillable es para permitir el almacenamiento masivo de datos, sin embargo en este
      tendrias que agregar casi todos los datos y para mejor opcion de almcenamiento masivo
     se recomienda usar la variable guarded donde solo negaras los datos que no quieres que se almacenen
     y permitira almacenar los otro datos*/

    //  protected $fillable = ['name','descripcion','categoria'];
    
    protected $guarded = [];
}
