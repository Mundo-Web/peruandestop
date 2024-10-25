<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntradasMultiples extends Model
{
    use HasFactory;
    protected $fillable = [
        'description' ,
        'tipo_entrada_id' ,
        'producto_id' ,
        'status'
    ];

    public function products(){
        return $this->belongsTo(Products::class, 'producto_id');
    }
    public function tipoEntrada()
    {
        return $this->belongsTo(TipoEntrada::class, 'tipo_entrada_id');
    }
}
