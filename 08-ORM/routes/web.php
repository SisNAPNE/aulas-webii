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

use \Illuminate\Http\Request;
use App\Models\Eixo;
use App\Models\Sala;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Aluno;
use App\Models\Matricula;

Route::get('/', function () {
    return view('welcome');
});

// ----------------------------------
// --- EIXOS E SALAS (Um-para-Um) ---
// ----------------------------------
Route::post('eixos/add', function(Request $request) {

    // Eixo
    $obj_eixo = new Eixo();
    $obj_eixo->nome = mb_strtoupper($request->nome_eixo, 'UTF-8');
    $obj_eixo->descricao = mb_strtoupper($request->desc_eixo, 'UTF-8');
    $obj_eixo->save();
    // Sala
    $obj_sala = new Sala();
    $obj_sala->nome = mb_strtoupper($request->nome_sala, 'UTF-8');
    $obj_sala->descricao = mb_strtoupper($request->desc_sala, 'UTF-8');
    // Associa o Eixo a Sala
    $obj_sala->eixo()->associate($obj_eixo);
    $obj_sala->save();

    return "<h1>Eixo Cadastrado com Sucesso!</h1>";
});

Route::get('/eixos', function () {

    $eixos = Eixo::with(['sala'])->get();
    return $eixos->toJson();
});

Route::get('/salas', function () {

    $salas = Sala::with(['eixo'])->get();
    return $salas->toJson();
});

// ---------------------------------------------
// --- CURSOS E DISCIPLINAS (Um-para-Muitos) ---
// ---------------------------------------------
Route::post('cursos/add', function (Request $request) {

    $obj_curso = new Curso();
    $obj_curso->nome = mb_strtoupper($request->nome, 'UTF-8');
    $obj_curso->descricao = mb_strtoupper($request->desc, 'UTF-8');
    $obj_curso->save();
    return "<h1>Curso Cadastrado com Sucesso!</h1>";
});

Route::post('disciplinas/add', function (Request $request) {

    $obj_curso = Curso::find($request->curso_id);
    if(isset($obj_curso)) {
        $obj_disciplina = new Disciplina();
        $obj_disciplina->nome = mb_strtoupper($request->nome, 'UTF-8');
        $obj_disciplina->curso()->associate($obj_curso);
        $obj_disciplina->save();
        return "<h1>Disciplina Cadastrada com Sucesso!</h1>";   
    }
    return "<h1>[ERRO] Curso NÃO ENCONTRADO!</h1>";   
});

Route::get('/cursos', function () {
    $obj_curso = Curso::with(['disciplina'])->get();
    return $obj_curso->toJson();
});

Route::get('/disciplinas', function () {
     $obj_disciplina = Disciplina::with(['curso'])->get();
     return $obj_disciplina->toJson();
});
 

// ------------------------------------------------
// --- ALUNOS E MATRÍCULAS (Muitos-para-Muitos) ---
// ------------------------------------------------
Route::post('alunos/add', function (Request $request) {
    $obj_aluno = new Aluno();
    $obj_aluno->nome = mb_strtoupper($request->nome, 'UTF-8');
    $obj_aluno->save();
    return "<h1>Aluno Cadastrado com Sucesso!</h1>";   
});

Route::post('matriculas/add', function (Request $request) {
    $obj_aluno = Aluno::find($request->aluno_id);
    $obj_disciplina = Disciplina::find($request->disciplina_id);
    if(isset($obj_aluno) && isset($obj_disciplina)) {
        $obj_matricula = new Matricula();
        $obj_matricula->descricao = mb_strtoupper($request->descricao, 'UTF-8');
        $obj_matricula->aluno()->associate($obj_aluno);
        $obj_matricula->disciplina()->associate($obj_disciplina);
        $obj_matricula->save();
        return "<h1>Matrícula Cadastrada com Sucesso!</h1>";   
    }
    return "<h1>[ERRO] Aluno e/ou Disciplina NÃO ENCONTRADO(S)!</h1>";   
});
  
Route::get('/alunos', function () {
    $obj_aluno = Aluno::with(['disciplina'])->get();
    return $obj_aluno->toJson();
 });
 
Route::get('/matriculas', function () {
    $obj_matricula = Matricula::with(['aluno', 'disciplina'])->get();
    return $obj_matricula->toJson();
});

Route::get('/disciplinas/alunos', function () {
    $obj_disciplina = Disciplina::with(['aluno'])->get();
    return $obj_disciplina->toJson();
});

Route::post('/matriculas/aluno', function (Request $request) {

    $obj_aluno = Aluno::find($request->aluno_id);
    
    if(isset($obj_aluno)) {
        $obj_aluno->disciplina()->detach();
    
        $disciplinas = $request->input('disciplinas');
        foreach($disciplinas as $item) {
            $obj_disciplina = Disciplina::find($item['disciplina_id']);    
            if(isset($obj_disciplina)){
                $obj_matricula = new Matricula();
                $obj_matricula->descricao = mb_strtoupper($item['descricao'], 'UTF-8');
                $obj_matricula->aluno()->associate($obj_aluno);
                $obj_matricula->disciplina()->associate($obj_disciplina);
                $obj_matricula->save();
            }
        }    
        return "<h1>Todas as Matrículas Efetuadas com Sucesso!</h1>";
    }

    return "<h1>[ERRO] Aluno e/ou Disciplina NÃO ENCONTRADO(S)!</h1>";       
});
