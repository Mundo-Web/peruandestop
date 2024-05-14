<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoEntrada extends Model
{
    use HasFactory;

    protected $fillable=['description'];

    public function entradasMultiples()
    {
        return $this->hasMany(EntradasMultiples::class, 'tipo_entrada_id');
    }

}
