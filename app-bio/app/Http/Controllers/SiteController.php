<?php

namespace App\Http\Controllers;

use App\Models\Atividade;
use App\Models\Integrante;
use App\Models\Material;
use Illuminate\Http\Request;

class SiteController extends Controller {
    
    public function getAtividades() {

        $data = Atividade::orderBy('data')->get();
        return view('site.atividade', compact('data'));
    }

    public function getIntegrantes() {
        $data = Integrante::orderBy('nome')->get();
        return view('site.integrante', compact('data'));
    }

    public function getMateriais() {
        $data = Material::orderBy('nome')->get();
        return view('site.material', compact('data'));
    }

}
