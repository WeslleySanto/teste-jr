<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    public $table = "venda";
    protected $fillable = ['valor', 'vendedor_id'];

    public function calcularComissao($valor)
    {
      $comissao  = $this->valor * 0.085;
      $this->comissao = $comissao;
      $this->vendedor->comissao += $comissao;
      $this->vendedor->save();
    }

    public function vendedor()
    {
      return $this->belongsTo('App\Model\Vendedor');
    }


}
