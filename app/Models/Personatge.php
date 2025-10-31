<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personatge extends Model
{
    protected $fillable = [
        'nombre',
        'genero',
        'ocupacion',
        'edad',
        'fecha_nacimiento',
        'estado',
        'ruta_imagen',
        'frases'
    ];

    protected $casts = [
        'frases' => 'array',
    ];
}
