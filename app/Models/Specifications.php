<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'tittle',
        'specifications',
        'visible',
        'status',
    ];

    public function productos(){
        return $this->belongsTo(Products::class , 'product_id');
    }

}
