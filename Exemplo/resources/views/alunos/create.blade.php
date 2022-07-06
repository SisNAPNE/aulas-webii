@extends('templates/main', ['titulo'=>"Novo Aluno"])

@section('conteudo')

<form action="{{ route('alunos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Nome</span>
                <input type="text" 
                    class="form-control @if($errors->has('nome')) is-invalid @endif"
                    name="nome" 
                    value="{{old('nome')}}" 
                />
                @if($errors->has('nome'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Matrícula</span>
                <input type="text" 
                    class="form-control @if($errors->has('matricula')) is-invalid @endif"
                    name="matricula" 
                    value="{{old('matricula')}}" 
                />
                @if($errors->has('matricula'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('matricula') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Nascimento</span>
                <input type="date" 
                    class="form-control @if($errors->has('data')) is-invalid @endif"
                    name="data" 
                    value="{{old('data')}}" 
                />
                @if($errors->has('data'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('data') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">E-mail</span>
                <input type="email" 
                    class="form-control @if($errors->has('email')) is-invalid @endif"
                    name="email" 
                    value="{{old('email')}}" 
                />
                @if($errors->has('email'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Telefone</span>
                <input type="text" 
                    class="form-control @if($errors->has('telefone')) is-invalid @endif"
                    name="telefone" 
                    value="{{old('telefone')}}"
                    data-mask="(00)0000-0000"
                />
                @if($errors->has('telefone'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('telefone') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Curso</span>
                <select 
                    name="curso"
                    class="form-select"
                    required
                >
                    <option selected="true" disabled="false"></option>
                    @foreach ($cursos as $item)
                        <option>{{ $item->nome }}</option>
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
                    class="form-control @if($errors->has('ano')) is-invalid @endif"
                    name="ano" 
                    value="{{old('ano')}}"
                />
                @if($errors->has('ano'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('ano') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <textarea
                    type="text"
                    class="form-control @if($errors->has('endereco')) is-invalid @endif"
                    name="endereco"
                    placeholder="Endereço do Responsável"
                    style="min-height: 100px"
                >{{old('endereco')}}</textarea>
                <label for="descricao">Endereço do Responsável</label>
                @if($errors->has('endereco'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('endereco') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <textarea
                    type="text"
                    class="form-control @if($errors->has('perfil')) is-invalid @endif"
                    name="perfil"
                    placeholder="Perfil do Aluno"
                    style="min-height: 100px"
                >{{old('perfil')}}</textarea>
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
            <ul class="list-group  mb-3">
                <span class="input-group-text w-100 bg-success text-white">Necessidades Específicas</span>
                @foreach ($necessidades as $item)
                    <li class="list-group-item">
                        <input class="form-check-input me-1" type="checkbox" name="necessidades" value="{{ $item->id }}" aria-label="...">
                        {{ $item->nome }}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Laudos</span>
                <input class="form-control" type="file" id="laudos" multiple>
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
            <a href="javascript:document.querySelector('form').submit();" class="btn btn-success btn-block align-content-center">
                Confirmar &nbsp;
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
            </a>
        </div>
    </div>
</form>
@endsection