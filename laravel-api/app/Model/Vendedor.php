<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $fillable = ['nome', 'email'];

    public function vendas()
    {
      return $this->hasMany('App\Venda');
    }

    public function adicionarComissao( $valor )
    {
      $this->comissao += $valor;
    }
}
