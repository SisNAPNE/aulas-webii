@extends('templates/main', ['titulo'=>"Alunos / Ocorrências"])

@section('conteudo')

<div class="row">
    <div class="col">
        <input type="hidden" id="id_remove">
        <table class="table align-middle caption-top table-striped">
            <caption>Tabela de <b>alunos com ocorrências</b> cadastradas no sistema</caption>
            <thead>
            <tr>
                <th scope="col" class="d-none d-md-table-cell">ID</th>
                <th scope="col">ALUNO</th>
                <th scope="col" class="d-none d-md-table-cell">TURMA</th>
                <th scope="col" class="d-none d-md-table-cell">NECESSIDADE</th>
                <th scope="col">AÇÕES</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="d-none d-md-table-cell">{{ $item->id }}</td>
                        <td>{{ $item->nome }}</td>
                        <td class="d-none d-md-table-cell">{{ $item->turma }}</td>
                        <td class="d-none d-md-table-cell">{{ $item->necessidade }}</td>
                        <td>
                            <a href= "{{ route('ocorrencias.show', $item->id) }}", class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-earmark-person-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm2 5.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-.245S4 12 8 12s5 1.755 5 1.755z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
            
@endsection