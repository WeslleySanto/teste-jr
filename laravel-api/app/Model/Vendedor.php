<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public $table = "vendedor";
    protected $fillable = ['nome', 'email'];

    public function vendas()
    {
      return $this->hasMany('App\Model\Venda');
    }

    public function adicionarComissao( $valor )
    {
      $this->comissao += $valor;
    }
}
