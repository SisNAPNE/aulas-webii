@extends('templates/main', ['titulo'=>"Informações do Curso"])

@section('conteudo')

<form action="{{ route('cursos.store') }}" method="POST">
    @csrf  
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Nome</span>
                <input 
                    type="text" 
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
                <span class="input-group-text bg-success text-white">Abreviatura</span>
                <input 
                    type="text" 
                    class="form-control" 
                    value="{{$data->abreviatura}}"
                    disabled
                />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Descrição</span>
                <textarea
                    type="text"
                    class="form-control"
                    style="min-height: 100px"
                    disabled
                >{{$data->descricao}}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Tempo</span>
                <input 
                    type="number" 
                    class="form-control" 
                    value="{{ $data->tempo }}"
                    disabled                />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Área/Eixo</span>
                <select 
                    class="form-select"
                    class="form-control" 
                    disabled
                >
                    @foreach ($eixos as $item)
                        <option value="{{$item->id}}" @if($item->id == $data->eixo_area_id) selected="true" @endif>
                            {{ $item->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" >
            <div class="input-group mb-3">
                <span class="input-group-text bg-success text-white">Nível</span>
                <select 
                    class="form-select"
                    class="form-control" 
                    disabled
                >
                    @foreach ($niveis as $item)
                        <option value="{{$item->id}}" @if($item->id == $data->nivel_id) selected="true" @endif>
                            {{ $item->nome }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="{{route('cursos.index')}}" class="btn btn-secondary btn-block align-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                    <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                </svg>
                &nbsp; Voltar
            </a>
        </div>
    </div>
</form>
@endsection