<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PermissionController;

class CursoController extends Controller {
    
    public function index() {        

        if(!PermissionController::isAuthorized('cursos.index')) {
            abort(403);
        }

        $permissions = session('user_permissions');
        return view('cursos.index', compact('permissions'));
    }

    public function create() {

        if(!PermissionController::isAuthorized('cursos.create')) {
            abort(403);
        }

        return view('cursos.create');
    }

    public function store(Request $request) {
        
    }

    public function show($id) {

        if(!PermissionController::isAuthorized('cursos.show')) {
            abort(403);
        }

        return view('cursos.show');
    }

    public function edit($id) {

        if(!PermissionController::isAuthorized('cursos.edit')) {
            abort(403);
        }

        return view('cursos.edit');
    }

    public function update(Request $request, $id) {
        
    }

    public function destroy($id) {

        if(!PermissionController::isAuthorized('cursos.destroy')) {
            abort(403);
        }

        return view('cursos.destroy');
    }
}
