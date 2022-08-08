<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\UserPermissions;

class CursoController extends Controller {
    
    public function index() {        

        if(!UserPermissions::isAuthorized('cursos.index')) {
            abort(403);
        }

        return view('cursos.index');
    }

    public function create() {

        if(!UserPermissions::isAuthorized('cursos.create')) {
            abort(403);
        }

        return view('cursos.create');
    }

    public function store(Request $request) {
        
    }

    public function show($id) {

        if(!UserPermissions::isAuthorized('cursos.show')) {
            abort(403);
        }

        return view('cursos.show');
    }

    public function edit($id) {

        if(!UserPermissions::isAuthorized('cursos.edit')) {
            abort(403);
        }

        return view('cursos.edit');
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {

        if(!UserPermissions::isAuthorized('cursos.destroy')) {
            abort(403);
        }

        return view('cursos.destroy');
    }
}
