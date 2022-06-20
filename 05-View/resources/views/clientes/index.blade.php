<!-- Herda o layout padrão definido no template "main" -->
@extends('templates.main', ['titulo' => "Clientes", 'rota' => "clientes.create"])
<!-- Preenche o conteúdo da seção "titulo" -->
@section('titulo') Clientes @endsection
<!-- Preenche o conteúdo da seção "conteudo" -->
@section('conteudo')

    <div class="row">
        <div class="col">
            
            <!-- Utiliza o componente "datalist" criado -->
            <x-datalist 
                :header="['ID', 'NOME', 'E-MAIL', 'AÇÕES']" 
                :data="$dados"
                :hide="[true, false, true, false]" 
            />

        </div>
    </div>
@endsection