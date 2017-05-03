<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Vendedor;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;


class VendedorController extends Controller
{
    public function index()
    {
        $Vendedores = Vendedor::all();
        return response()->json($Vendedores);
    }

    public function listarVendedores($Vendedor)
    {
      $Vendedor = Vendedor::find($Vendedor);
      $vende = $Vendedor->venda;
      return response()->json($Vendedor);
    }

    public function criarVendedor(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
        'nome' => 'required',
        'email' => 'required|email'
      ]);

        if ($validator->fails()) {
          return response()->json([
            'message' => 'Validation Failed',
            'errors' => $validator->errors()->all()
          ], 422);
        }

        $Vendedor = new Vendedor();
        $Vendedor->fill($data);

        $Vendedor->save();

        return response()->json($Vendedor, 201);

    }
}
