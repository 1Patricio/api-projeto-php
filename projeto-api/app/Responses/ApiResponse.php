<?php

namespace App\Responses;    // Caminho da pasta

class ApiResponse{          // Métodos estáticos --> Não quer dizer que não mudam e sim não precisa instancia objetos para chamar
    public static function success(?string $message = null, mixed $data = null){
        return response()->json([
            "message" => $message,
            "data" => $data,
            "status" => "success"
        ], 200);
    }

    public function ok(string $message)
    {
        return self::success($message);
    }

    
}