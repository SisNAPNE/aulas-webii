@extends('templates/main', ['titulo'=>"Site do NAPNE"])

@section('conteudo')

<form action="{{ route('apresentacao.store') }}" method="POST">
    @csrf
    @if($flag) 
        <div class="alert alert-warning" role="alert">
            Alteração efetuada com sucesso!
        </div>
    @endif
    <div class="row">
        <div class="col" >
            <div class="form-floating mb-3">
                <textarea
                    type="text"
                    class="form-control @if($errors->has('apresentacao')) is-invalid @endif"
                    name="apresentacao"
                    placeholder="Apresentação"
                    style="min-height: 100px"
                >{{ $data->apresentacao }}</textarea>
                <label for="apresentacao">Apresentação</label>
                @if($errors->has('apresentacao'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('apresentacao') }}
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
                    class="form-control @if($errors->has('missao')) is-invalid @endif"
                    name="missao"
                    placeholder="Missão"
                    style="min-height: 100px"
                >{{ $data->missao }}</textarea>
                <label for="missao">Missão</label>
                @if($errors->has('missao'))
                    <div class='invalid-feedback'>
                        {{ $errors->first('missao') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
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