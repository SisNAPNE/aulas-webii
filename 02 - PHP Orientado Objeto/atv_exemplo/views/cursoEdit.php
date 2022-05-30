<?php

    include_once '../global.php';

    if( !empty($_POST['form_submit']) ) {
        CursoController::update();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SisColetivos - Alterar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-secondary">
            <div class="container-fluid">
                <a href="main.php" class="navbar-brand ms-sm-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-clipboard2-pulse-fill" viewBox="0 0 16 16">
                        <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                        <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                    </svg>
                    <span class="ms-3 fs-5">SisColetivos</span>
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#itens">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z"/>
                        <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </div>
        </nav>
        <div class="container py-4">        
            <form class="form" method="post" action="cursoEdit.php">
                <input type="hidden" name="form_submit" value="OK">

                <h3 class="display-7 text-secondary"><b>Novo Curso</b></h3>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="id" 
                                placeholder="id"
                                value="<?php echo $_GET['id']; ?>"
                                readonly="true"
                            />
                            <label for="id">ID do Curso</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="nome" 
                                placeholder="Nome"
                                value="<?php echo $_GET['nome']; ?>"
                            />
                            <label for="nome">Nome do Curso</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="text" 
                                class="form-control" 
                                name="sigla" 
                                placeholder="Sigla"
                                value="<?php echo $_GET['sigla']; ?>"
                            />
                            <label for="sigla">Sigla do Curso</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col" >
                        <div class="form-floating mb-3">
                            <input 
                                type="number"
                                min="1" 
                                max="5" 
                                class="form-control" 
                                name="tempo" 
                                placeholder="Tempo"
                                value="<?php echo $_GET['tempo']; ?>"
                            />
                            <label for="tempo">Tempo do Curso (anos)</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="cursoIndex.php" class="btn btn-secondary btn-block align-content-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
                                <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
                            </svg>
                            &nbsp; Voltar
                        </a>
                        <button type='submit' class='btn btn-success btn-block align-content-center'>
                            Confirmar &nbsp;
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
