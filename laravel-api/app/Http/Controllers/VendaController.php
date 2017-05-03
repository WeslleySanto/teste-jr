<?php
namespace App\Http\Controllers;

use App\Model\Venda;
use App\Helpers\SalesHelper;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Mail\SellsSummary;
use Validator;

class VendaController extends Controller
{

    public function store(Request $request)
    {
      $data = $request->all();

      $validator = Validator::make($data, [
        'vendedor_id' => 'required',
        'valor' => 'required|numeric|min:1'
      ]);

      if ($validator->fails()) {
        return response()->json([
          'message' => 'Validation Failed',
          'errors' => $validator->errors()->all()
        ], 422);
      }

      $venda = new Venda();
      $venda->fill($data);
      $venda->calcularComissao();
      $vendedor = $venda->vendedor;
      $venda->save();

      return response()->json($venda, 201);
    }
}