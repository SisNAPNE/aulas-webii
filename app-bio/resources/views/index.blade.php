@extends('template.main', ['menu' => "Projeto Multidisciplinar: ", "submenu" => "Principal"])

@section('titulo') Desenvolvimento Web @endsection

@section('conteudo')
<div class="row">
    <div class="col">
        <div class="card text-center border-success card-bg-success">
            <div class="card-header text-white" style="background-color: #198754;">
              Atividades
            </div>
            <div class="card-body">
                <a href="{{route('site.atividade')}}" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="#198754" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center border-success card-bg-success">
            <div class="card-header text-white" style="background-color: #198754;">
              Integrantes
            </div>
            <div class="card-body">
                <a href="{{route('site.integrante')}}" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="#198754" class="bi bi-people-fill" viewBox="0 0 16 16">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-center border-success card-bg-success">
            <div class="card-header text-white" style="background-color: #198754;">
              Materiais
            </div>
            <div class="card-body">
                <a href="{{route('site.material')}}" class="dropdown-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="#198754" class="bi bi-box-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15.528 2.973a.75.75 0 0 1 .472.696v8.662a.75.75 0 0 1-.472.696l-7.25 2.9a.75.75 0 0 1-.557 0l-7.25-2.9A.75.75 0 0 1 0 12.331V3.669a.75.75 0 0 1 .471-.696L7.443.184l.004-.001.274-.11a.75.75 0 0 1 .558 0l.274.11.004.001 6.971 2.789Zm-1.374.527L8 5.962 1.846 3.5 1 3.839v.4l6.5 2.6v7.922l.5.2.5-.2V6.84l6.5-2.6v-.4l-.846-.339Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection