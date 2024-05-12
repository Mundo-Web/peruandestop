<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'valor',
        'descripcion',
        'color',
        'imagen', 
        'type_img'
    ];

    public function galeria()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
