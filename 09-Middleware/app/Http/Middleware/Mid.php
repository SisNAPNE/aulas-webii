<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

class Mid {

    /* public function handle(Request $request, Closure $next, $nome, $idade) {
        Log::debug("[Mid]: $nome - $idade");
        return $response;
    }*/

    /*public function handle(Request $request, Closure $next) {

        Log::debug("[Mid]: Antes Resposta");
        $response = $next($request);
        Log::debug("[Mid]: Depois Resposta");
        return $response;
    }*/

    /*public function handle(Request $request, Closure $next) {

        Log::debug("[Mid]: Antes Resposta");
        $response = $next($request);
        Log::debug("[Mid]: Depois Resposta");
        Log::debug($response->getContent());
        return $response;
    }*/

    /*public function handle(Request $request, Closure $next) {

        Log::debug("[Mid]: Antes Resposta");
        $response = $next($request);
        Log::debug("[Mid]: Depois Resposta");
        return $response->setContent("<h1>Resposta Alterada</h1>");
    }*/

    /*public function handle(Request $request, Closure $next) { 

        // $route = Route::currentRouteName();
        $route = $request->url();
        Log::debug("[Route]: ".$route);
        Log::debug("[Mid]: Antes Resposta");
        $response = $next($request);
        Log::debug("[Mid]: Depois Resposta");
        return $response;
    }*/

    public function handle(Request $request, Closure $next) { 
            
        $route = Route::currentRouteName();
        Log::debug("[Route]: ".$route);
        Log::debug("[Mid]: Antes Resposta");
        $response = $next($request);
        Log::debug("[Mid]: Depois Resposta");
        return $response;
    }


}
