<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
  use HasFactory;
  protected $fillable = [
    'producto',
    'precio',
    'descuento',
    'stock',
    'imagen',
    'destacar',
    'recomendar',
    'atributes',
    'visible',
    'status',
    'extract',
    'description',
    'costo_x_art',
    'peso',
    'categoria_id',
    'langs',
    'id_marketplace',
    'hours',
    'costo_agencia'
  ];


  public function categoria()
  {
      return $this->belongsTo(Category::class, 'categoria_id');
  }

  public function galeria(){
    return $this->hasMany(Galerie::class, 'product_id');
  }

  public function tags()
  {
      return $this->belongsToMany(Tag::class, 'tags_xproducts', 'producto_id', 'tag_id');
  }
  public function scopeActiveDestacado($query)
  {
      return $query->where('status', true)->where('destacar', true);
  }

  public function specifications(){
    return $this-> hasMany(Specifications::class, 'product_id');
  }
  public function entradasMulti(){
    return $this-> hasMany(EntradasMultiples::class, 'producto_id');
  }
}
