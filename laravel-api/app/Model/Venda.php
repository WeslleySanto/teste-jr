<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['valor', 'vendedor_id', 'data'];

    public function calcularComissao()
    {
      $comissao  = round(($this->value * 0.085), 2);
      $this->comissao = $comissao;
      $this->vendedor->comissao += $comissao;
      $this->vendedor->save();
    }

    public function vendedor()
    {
      return $this->belongsTo('App\Vendedor');
    }


}
