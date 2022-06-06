<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return "<h1>Rota Principal</h2>";
});

// Criando Novas Rotas
Route::get('/clientes', function() {

    $clientes = "<ul>
        <li>Carlos Eduardo</li>
        <li>Maria Cláudia</li>
        <li>João Pedro</li>
    </ul>";

    return $clientes;

})->name('clientes');

// Parâmetros de Rotas - Obrigatórios
Route::get('/clientes/{total}', function($total) {

    $dados = array(
        "Carlos Eduardo",
        "Maria Cláudia",
        "João Pedro"
    );

    $clientes = "<ul>";

    if($total <= count($dados)) {
        $cont = 0;
        foreach($dados as $nome) {
            $clientes .= "<li>$nome</li>";
            $cont++;
            if($cont >= $total) break;
        }
    }
    else {
        $clientes = $clientes."<li>Tamanho Máximo = ".count($dados)."</li>";
    }

    $clientes .= "</ul>";

    return $clientes;
});

// Parâmetros de Rotas - Obrigatórios
Route::get('/clientes/{total}/{nome}', function($total, $nome) {

    $clientes = "<ul>";

    for($cont=0; $cont<$total; $cont++) {
        $clientes .= "<li>$nome</li>";
    }

    $clientes .= "</ul>";

    return $clientes;
});

// Parâmetros de Rotas - Opcionais
Route::get('/racas/{total}/{raca?}/', function($total, $raca=null) {

    $dados = array(
        "Bulldog Inglês",
        "Labrador",
        "Pastor Alemão",
        "Akita"
    );
    
    $pets = "<ul>";

    if($raca == null) {
        if($total <= count($dados)) {
            $cont = 0;
            foreach($dados as $item) {
                $pets .= "<li>$item</li>";
                $cont++;
                if($cont >= $total) break;
            }
        }
        else {
            $pets .= "<li>Tamanho Máximo = ".count($dados)."</li>";
        }
    }
    else {
        for($cont=0; $cont<$total; $cont++) {
            $pets .= "<li>$raca</li>";
        }
    }
    
    $pets .= "</ul>";

    return $pets;
});

// Parâmetros de Rotas - Com Regras
Route::get('/veterinarios/{total}/{nome}', function($total, $nome) {

    $vets = "<ul>";

    for($a=0; $a<$total; $a++) {
            $vets = $vets."<li>$nome</li>";
    }

    $vets = $vets."</ul>";

    return $vets;
    
})->where('total', '[0-9]+')->where('nome', '[A-Za-z]+');

// Agrupamento de Rotas / Retornando View
Route::prefix('/consultas')->group(function() {

    Route::get('/', function() {
        // return "<h1>Lista de Consultas Agendadas</h1>";
        return view('consultas');
    })->name('consultas');

    Route::get('/agendar', function() {
        // return "<h1>Agendar Consulta</h1>";
        return view('agendar');
    })->name('consultas.agendar');

    Route::get('/cancelar', function() {
        // return "<h1>Canclar Consulta</h1>";
        return view('cancelar');
    })->name('consultas.cancelar');
});

// Redirecionamento de rotas
Route::redirect('/', 'clientes', 301);

Route::get('/veterinarios', function() {
    return redirect()->route('clientes');
});

// Rota com Método POST
Route::post('veterinarios/add', function(Request $request) {
    
    return "<h1>Adicionar Veterinário (POST)</h1>";
});
