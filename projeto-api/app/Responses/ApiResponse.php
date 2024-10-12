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

    public static function ok(string $message, mixed $data = null)
    {
        return self::success($message, $data);
    }

    public static function error(mixed $errors, string $message)    
    {
        return response()->json([
            "errors" => $errors,
            "message" => $message,
            "data" => [],
            "status" => "fail"
        ], 400);   //Client error
    }
}