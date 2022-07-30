<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewMid {

    public function handle(Request $request, Closure $next) {

        // Log::debug("[NewMid]: passou aqui");
        Log::debug("[NewMid]: Antes Resposta");    
        $response = $next($request);
        Log::debug("[NewMid]: Depois Resposta");
        return $response;
    }
}
