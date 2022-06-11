<h2>Alterar Cliente</h2>
<form action="{{ route('clientes.update', $dados['id']) }}" method="POST">
   <!-- Token de Segurança -->
   <!-- Define o método de submissão como PUT -->
   @csrf
   @method('PUT')
   <a href="{{route('clientes.index')}}"><h4>voltar</h4></a>
   <label>Nome: </label> <input type='text' name='nome' value='{{$dados['nome']}}'>
   <label>E-mail: </label> <input type='text' name='email' value='{{$dados['email']}}'>
   <input type="submit" value="Salvar">
</form>