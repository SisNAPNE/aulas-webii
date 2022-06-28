<?php

namespace App\Http\Controllers;
use App\Models\Endereco;

use Illuminate\Http\Request;

class EnderecoController extends Controller {
    
    public function index() {

        $dados = Endereco::all();
        return view('enderecos.index', compact('dados'));
    }

    public function create() {
        return view('enderecos.create');
    }

    public function store(Request $request) {
        
        Endereco::create([
            'rua' => mb_strtoupper($request->rua, 'UTF-8'),
            'numero' => $request->numero,
            'cep' => $request->cep,
        ]);
        
        return redirect()->route('enderecos.index');
    }

    public function show($id) { }

    public function edit($id) {
        
        $dados = Endereco::find($id);

        if(!isset($dados)) { return "<h1>ID: $id não encontrado!</h1>"; }

        return view('enderecos.edit', compact('dados'));    
    }

    public function update(Request $request, $id) {
     
        $obj = Endereco::find($id);

        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }

        $obj->fill([
            'rua' => mb_strtoupper($request->rua, 'UTF-8'),
            'numero' => $request->numero,
            'cep' => $request->cep,
        ]);

        $obj->save();

        return redirect()->route('enderecos.index');
    }

    public function destroy($id) {
        
        $obj = Endereco::find($id);

        if(!isset($obj)) { return "<h1>ID: $id não encontrado!"; }

        $obj->destroy();

        return redirect()->route('enderecos.index');
    }
}
