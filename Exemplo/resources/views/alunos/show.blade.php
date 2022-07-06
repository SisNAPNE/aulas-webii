@extends('templates/main', ['titulo'=>"Dados do Aluno"])

@section('conteudo')

<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Nome</span>
            <input type="text" 
                class="form-control"
                value="{{$data->nome}}"
                disabled
            />
        </div>
    </div>
</div>
<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Matrícula</span>
            <input type="text" 
                class="form-control"
                value="{{$data->matricula}}" 
                disabled
            />
        </div>
    </div>
</div>
<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Nascimento</span>
            <input type="date" 
                class="form-control"
                value="{{$data->nascimento}}" 
                disabled
            />
        </div>
    </div>
</div>
<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">E-mail</span>
            <input type="email" 
                class="form-control"
                name="email" 
                value="{{$data->email}}" 
                disabled
            />
        </div>
    </div>
</div>
<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Telefone</span>
            <input type="text" 
                class="form-control"
                name="telefone" 
                value="{{$data->telefone}}"
                disabled
            />
        </div>
    </div>
</div>
<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Curso</span>
            <select class="form-select" disabled>
                @foreach ($cursos as $item)
                    @if($item->nome == $data->curso)
                        <option selected="true">{{ $item->nome }}</option>
                    @else
                        <option>{{ $item->nome }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col" >
        <div class="input-group mb-3">
            <span class="input-group-text bg-success text-white">Ano de Ingresso</span>
            <input type="number" 
                class="form-control"
                value="{{$data->ano_ingresso}}"
                disabled
            />
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-floating mb-3">
            <textarea
                class="form-control"
                placeholder="Endereço do Responsável"
                style="min-height: 100px"
                disabled
            >{{$data->endereco}}</textarea>
            <label for="descricao">Endereço do Responsável</label>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-floating mb-3">
            <textarea
                class="form-control"
                placeholder="Perfil do Aluno"
                style="min-height: 100px"
                disabled
            >{{$data->perfil}}</textarea>
            <label for="descricao">Perfil do Aluno</label>
            @if($errors->has('perfil'))
                <div class='invalid-feedback'>
                    {{ $errors->first('perfil') }}
                </div>
            @endif
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card  mb-3">
            <div class="card-header bg-success text-white">
                Necessidades Específicas
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($data->necessidades as $n)
                    <li class="list-group-item">{{ $n->nome }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="card  mb-3">
            <div class="card-header bg-success text-white">
                Laudos
            </div>
            <ul class="list-group list-group-flush">
                @foreach ($data->laudos as $l)
                    <li class="list-group-item">
                        <a href= "{{ asset('storage/files/'.$l->arquivo) }}" target="_blank">{{$l->arquivo}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="{{route('alunos.index')}}" class="btn btn-secondary btn-block align-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
            </svg>
            &nbsp; Voltar
        </a>
    </div>
</div>
@endsection