<?php

namespace App\Http\Controllers;    // Caminho da pasta

use App\Responses\ApiResponse;
use Illuminate\Http\Request;       // Vai substituir o require_once 
use Illuminate\Http\Response;

class ClienteController extends Controller
{
    public function salvar()
    {

    }

    public function listar()
    {
        return ApiResponse::success(data: ["nome" => "Anderson"]);     
    }
    
    public function editar(int $id)
    {

    }

    public function excluir(int $id)
    {

    }
}
