<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencias extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_agencia',
        'ruc',
        'no_registro',
        'direccion',
        'codigo_pais',
        'telefono',
        'email',
        'pagina_web',
        'nombre_representante',
        'identificacion_representante',
        'telefono_representante',
        'email_representante',
        'tipo_agencia',
        'url_declaracion',
    ];
}
