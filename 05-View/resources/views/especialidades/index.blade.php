<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Especialidades", 'rota' => "especialidades.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Clientes @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            <x-datatable 
                title="Especialidades" 
                crud="especialidades" 
                :header="['id', 'nome', 'descricao', 'ações']" 
                :data="$dados"
                :hide="[true, false, true, false]" 
            /> 
        </div>
    </div>
@endsection