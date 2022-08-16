<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\UserPermissions;
use App\Models\Curso;

class CursoController extends Controller {
    
    public function index() {        

        if(!UserPermissions::isAuthorized('cursos.index')) {
            abort(403);
        }

        $cursos = Curso::orderBy('nome')->get();
        return view('cursos.index', compact('cursos'));
    }

    public function create() {

        if(!UserPermissions::isAuthorized('cursos.create')) {
            abort(403);
        }

        return view('cursos.create');
    }

    public function store(Request $request) {
        
        $obj = new Curso();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');   
        $obj->tempo = $request->tempo;
        $obj->save();

        return redirect()->route('cursos.index');
    }

    public function show($id) {

        if(!UserPermissions::isAuthorized('cursos.show')) {
            abort(403);
        }

        $curso = Curso::find($id);

        if(isset($curso)) {
            return view('cursos.show', compact('curso'));
        }

        return "<h1>Curso não Encontrado!</h1>";        
    }

    public function edit($id) {

        if(!UserPermissions::isAuthorized('cursos.edit')) {
            abort(403);
        }

        $curso = Curso::find($id);

        if(isset($curso)) {
            return view('cursos.edit', compact('curso'));
        }

        return "<h1>Curso não Encontrado!</h1>";        
    }

    public function update(Request $request, $id) {
        
        $obj = Curso::find($id);

        if(isset($obj)) {
            $obj->nome = mb_strtoupper($request->nome, 'UTF-8');   
            $obj->tempo = $request->tempo;
            $obj->save();
            return redirect()->route('cursos.index');
        }

        return "<h1>Curso não Encontrado!</h1>";
    }

    public function destroy($id) {

        if(!UserPermissions::isAuthorized('cursos.destroy')) {
            abort(403);
        }

        $obj = Curso::find($id);

        if(isset($obj)) {
            $obj->delete();
            return redirect()->route('cursos.index');
        }

        return "<h1>Curso não Encontrado!</h1>";
    }
}
