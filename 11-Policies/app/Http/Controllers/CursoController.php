<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller {

    public function __construct() {
        $this->authorizeResource(Curso::class, 'curso');
    }

    public function index() {

        // $this->authorize('viewAny',  Curso::class);
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create() {

        // $this->authorize('create',  Curso::class);
        return view('cursos.create');
    }

    public function store(Request $request) {
        // $this->authorize('create',  Curso::class);

        $obj = new Curso();
        $obj->nome = mb_strtoupper($request->nome, 'UTF-8');   
        $obj->save();

        return redirect()->route('cursos.index');
    }

    public function show(Curso $curso) {
        
        // $this->authorize('view', $curso);

        if(isset($curso)) {
            return view('cursos.show', compact('curso'));
        }

        return "<h1>Curso não Encontrado!</h1>";        
    }

    public function edit(Curso $curso) {
        
        // $this->authorize('update', $curso);

        if(isset($curso)) {
            return view('cursos.edit', compact('curso'));
        }

        return "<h1>Curso não Encontrado!</h1>";        
    }

    public function update(Request $request, Curso $curso) {
        // $this->authorize('update', $curso);

        if(isset($curso)) {
            $curso->nome = mb_strtoupper($request->nome, 'UTF-8');   
            $curso->save();
            return redirect()->route('cursos.index');
        }

        return "<h1>Curso não Encontrado!</h1>";
    }

    public function destroy(Curso $curso) {
        
        // $this->authorize('delete', $curso);

        if(isset($curso)) {
            $curso->delete();
            return redirect()->route('cursos.index');
        }

        return "<h1>Curso não Encontrado!</h1>";
    }
}
