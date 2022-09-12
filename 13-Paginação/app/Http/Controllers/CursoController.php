<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller {

    public function index() {

        $cursos = Curso::paginate(5);
        return view('cursos.index', compact('cursos'));
    }
}
