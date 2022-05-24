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
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFF" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
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
