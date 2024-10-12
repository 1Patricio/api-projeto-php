<?php

namespace App\Http\Controllers;    // Caminho da pasta

use App\Models\Cliente;
use App\Responses\ApiResponse;
use Illuminate\Http\Request;       // Vai substituir o require_once 
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function salvar(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return ApiResponse::error($validator ->errors(), 'Validation error');  //Por um método só pode ter um return, desse jeito vai dar um break 
        }

        $customer = Cliente::create($request->all());
        return ApiResponse::ok('Cliente salvo com sucesso', $customer);
    }

    public function listar()
    {
        $customer = Cliente::all();   
        return ApiResponse::ok('Lista de Clientes', $customer);
    }

    public function listarPeloId(int $id)
    {
        $customer = Cliente::findOrFail($id);
        return ApiResponse::ok('Cliente a ser listado', $customer);
    }
    
    public function editar(Request $request, int $id)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:15',
        ]);

        if ($validator->fails()) {
            return ApiResponse::error($validator ->errors(), 'Validation error');  //Por um método só pode ter um return, desse jeito vai dar um break 
        }

        $customer = Cliente::findOrFail($id);
        $customer->update($request->all());

        return ApiResponse::ok('Cliente salvo com sucesso', $customer);
    }
    public function excluir( int $id)
    {
        $customer = Cliente::findOrFail($id);
        $customer->delete();
        
        return ApiResponse::ok('Cliente salvo com sucesso');
    }
}
