<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Alumno extends Model
{
    protected $fillable = [
        'nombre', 'apellidos', 'edad', 'correo', 'carrera', 'grado_estudios', 'contacto', '_token'
    ];
    protected $table = 'alumno'; // Nombre de tu tabla en la base de datos
    public $timestamps = false; // Deshabilitar el manejo automático de timestamps
}