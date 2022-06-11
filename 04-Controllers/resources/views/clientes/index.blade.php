<h2>Lista de Clientes</h2>
<a href="{{ route('clientes.create') }}"><h4>Novo Cliente</h4></a>
<table>
   <thead>
       <tr>
           <th>ID</th>
           <th>NOME</th>
           <th>E-MAIL</th>
           <th>INFO</th>
           <th>EDITAR</th>
           <th>REMOVER</th>
       </tr>
   </thead>
   <tbody>
       <!-- Funcionalidade Blade / Laço Repetição -->
       <!-- Percorre o array clientes enviado pela Controller -->
       @foreach ($clientes as $item)
           <tr>
               <!-- Acessa os campos de cada item do array -->
               <td>{{ $item['id'] }}</td>
               <td>{{ $item['nome'] }}</td>
               <td>{{ $item['email'] }}</td>
               <td><a href="{{ route('clientes.show', $item['id']) }}">info</a></td>
               <td><a href="{{ route('clientes.edit', $item['id']) }}">editar</a></td>
               <td>
                   <form action="{{ route('clientes.destroy', $item['id']) }}" method="POST">
                       <!-- Token de Segurança -->
                       <!-- Define o método de submissão como delete -->
                       @csrf
                       @method('DELETE')
                       <input type='submit' value='remover'>
                   </form>
               </td>
           </tr>
       @endforeach
   </tbody>
</table>