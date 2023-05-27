<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'eventos';

    protected $fillable = [
        'nombre',
        'lugar',
        'fecha_inicio',
        'fecha_fin',
        'precio',
        'id_eventos',
    ];
}
