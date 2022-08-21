<html>
<body>
   <h4>Seja bem vindo(a), {{$user->nome}}</h4>
   <p> Novo acesso com email: {{$user->email}}</p>
   <p> Data/Hora: {{ $data }}</p>
   <div>
       <img width="10%" height="10%"
           src="{{ $message->embed(public_path().'/img/ifpr.png') }}">
   </div>
</body>
</html>