<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller {

    public function index() {

        $this->authorize('viewAny',  Curso::class);
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create() {

        $this->authorize('create',  Curso::class);
        return view('cursos.create');
    }

    public function store(Request $request) {
        $this->authorize('create',  Curso::class);
    }

    public function show(Curso $curso) {
        
        $this->authorize('view', $curso);
        return view('cursos.show');
    }

    public function edit(Curso $curso) {
        
        $this->authorize('update', $curso);
        return view('cursos.edit');
    }

    public function update(Request $request, Curso $curso) {
        $this->authorize('update', $curso);
    }

    public function destroy(Curso $curso) {
        
        $this->authorize('delete', $curso);
        return view('cursos.destroy');
    }
}
