<?php

    include_once ("controle.php");

    if( !empty($_POST['form_submit']) ) {
        rotas($_POST["acao"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SisColetivos - Cursos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
    <div class="container py-4">    
        <form action="viewMain.php" method="POST">
            <input type="hidden" name="form_submit" value="OK">
            <div class="row">
                <div class="col">
                    <h3 class="display-7 text-secondary"><b>Cursos</b></h3>
                </div>
                <div class="col d-flex justify-content-end">
                    <button type='submit' name='acao' value='cadastrar/0' class='btn btn-secondary'>
                       <!--  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-badge-sd-fill" viewBox="0 0 16 16">
  <path d="M10.338 5.968h-.844v4.06h.844c1.116 0 1.622-.667 1.622-2.02 0-1.354-.51-2.04-1.622-2.04Z"/>
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm5.077 7.114c1.521 0 2.378-.764 2.378-1.88 0-1.007-.642-1.473-1.613-1.692l-.932-.216c-.527-.114-.821-.351-.821-.712 0-.466.39-.804 1.046-.804.637 0 1.028.33 1.103.76h1.125c-.058-.923-.849-1.692-2.22-1.692-1.322 0-2.24.717-2.24 1.815 0 .91.588 1.446 1.52 1.657l.927.215c.624.145.923.36.923.778 0 .492-.391.83-1.13.83-.707 0-1.155-.342-1.234-.808H2.762c.052.95.79 1.75 2.315 1.75ZM8.307 11h2.19c1.81 0 2.684-1.107 2.684-3.015 0-1.894-.861-2.984-2.685-2.984H8.308V11Z"/>
</svg>
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table align-middle caption-top table-striped">
                        <caption>Tabela de <b>Cursos</b></caption>
                        <thead>
                        <tr>
                            <th scope="col" class="d-none d-md-table-cell">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col" class="d-none d-md-table-cell">SIGLA</th>
                            <th scope="col" class="d-none d-md-table-cell">TEMPO</th>
                            <th scope="col">AÇÕES</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php loadCursos(); ?>
                        </tbody>    
                    </table>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
