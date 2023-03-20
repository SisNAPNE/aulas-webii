<?php
    include_once 'rotina_tabela.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Utilizando Bootstrap 5</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <span class="ms-3 fs-5">Usuários do Sistema</span>
            </a>
    </nav>
    <div class="container">
        <div class="row justify-content-end mt-4">
            <div class="col-1">
                <a href= "#" class="btn btn-primary ms-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                </a>
            </div>
        </div>
        <hr>
        <div class="row justify-content-center mt-4">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">CPF</th>
                  <th scope="col">NOME</th>
                  <th scope="col">ENDEREÇO</th>
                  <th scope="col">TELEFONE</th>
                  <th scope="col">AÇÃO</th>
                </tr>
              </thead>
              <tbody>
                <?php loadTable(); ?>
              </tbody>
            </table>  
        </div>
    </div>
</body>
</html>
