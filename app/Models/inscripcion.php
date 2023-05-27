<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscripcion extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'inscripciones';

    protected $fillable = [
        'nombre',
        'apellidos',
        'documento',
        'email',
        'telefono',
        'id_eventos',
    ];
}
