<?php

namespace App\Models; //JOHAN SERRATO ACOSTA

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;


    protected $table = 'tareas'; 

    protected $fillable = [
        'titulo',
        'descripcion',
        'completado',
    ];

    protected $casts = [
        //'completado' => 'boolean',  //aqui habia boolean
        'fechaRegistro' => 'datetime',
    ];
}
//JOHAN SERRATO ACOSTA 