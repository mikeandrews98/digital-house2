<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamanho extends Model
{
  protected $table = 'tamanho';

  protected $fillable = ['name', 'id_categoria'];

  public function categoria(){
    return $this->hasOne(Categoria::class, 'id', 'id_categoria');
  }

  public function produto(){
    return $this->hasMany(Produto::class,'id_tamanho', 'id');
  }
}
